<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', [ MainController::class, 'index' ] )->name( 'main' );


// PROFILE
Route::get( 'profile',          [ ProfilesController::class, 'index' ] )->name( 'profile.index' );
Route::get( 'profile/rates',    [ ProfilesController::class, 'rates' ] )->name( 'profile.rates' );
Route::get( 'profile/payments', [ ProfilesController::class, 'payments' ] )->name( 'profile.payments' );


// CATALOG GIRLS
Route::match(['get', 'post'], '/elite',         [ CatalogController::class, 'showEliteCatalog' ] )->name( 'catalog.elite' );
Route::match(['get', 'post'], '/individuals',   [ CatalogController::class, 'showIndividualsCatalog' ] )->name( 'catalog.individuals' );
Route::match(['get', 'post'], '/cheap',         [ CatalogController::class, 'showCheapCatalog' ] )->name( 'catalog.cheap' );
Route::match(['get', 'post'], '/bdsm',          [ CatalogController::class, 'showBdsmCatalog' ] )->name( 'catalog.bdsm' );
Route::match(['get', 'post'], '/masseuses',     [ CatalogController::class, 'showMasseusesCatalog' ] )->name( 'catalog.masseuses' );

Route::get( '/{section}/id{id}', [ CatalogController::class, 'showProfileCatalog' ] )->name( 'catalog.profile' );


// AJAX SEARCH
Route::post( '/search',                               [ SearchController::class, 'ajaxSearch' ] )->name( 'search' );
Route::get( '/search/metro',                          [ SearchController::class, 'searchMetro' ] )->name( 'search.metro' );
Route::post( '/search/metro',                         [ SearchController::class, 'searchMetro' ] )->name( 'search.metro' );
Route::get( '/search/metro/{id?}',                    [ SearchController::class, 'searchMetroResult' ] )->name( 'search.metro.result' );


// ARTICLES
Route::get('articles', [PostController::class, 'post.index'])->name('post.index');
Route::get('articles/{id}', [PostController::class, 'post.index'])->name('post.index');

require __DIR__.'/auth.php';
