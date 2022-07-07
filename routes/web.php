<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;


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

// SEARCH
Route::post( '/search',                                         [ SearchController::class, 'ajaxSearch' ] )->name( 'search' );
Route::get( '/search/metro',                                    [ SearchController::class, 'searchMetro' ] )->name( 'search.metro' );
Route::post( '/search/metro',                                   [ SearchController::class, 'searchMetro' ] )->name( 'search.metro' );
Route::get( '/search/metro/devushki-na-stancii-metro-{slug?}',  [ SearchController::class, 'searchMetroResult' ] )->name( 'search.metro.result' );


// ARTICLES
Route::get('articles', [PostController::class, 'index'])->name('post.index');
Route::get('articles/{slug}', [PostController::class, 'show'])->name('post.show');


// PROFILE
Route::get( 'profile',              [ ProfilesController::class, 'index' ] )->name( 'profile.index' );
Route::get( 'profile/rates',        [ ProfilesController::class, 'rates' ] )->name( 'profile.rates' );
Route::get( 'profile/payments',     [ ProfilesController::class, 'payments' ] )->name( 'profile.payments' );
Route::post('profile/uploadFiles',  [ ProfilesController::class, 'uploadFiles' ] )->name( 'profile.upload' );
Route::post('profile/deleteFiles',  [ ProfilesController::class, 'deleteFiles' ] )->name( 'profile.delete' );
Route::post('profile/sortFiles',    [ ProfilesController::class, 'sortFiles' ] )->name( 'profile.sort' );
Route::post('profile/saveProfile',  [ ProfilesController::class, 'saveProfile' ] )->name( 'profile.save' );


// CATALOG GIRLS
Route::match(['get', 'post'], '/elite',         [ CatalogController::class, 'showEliteCatalog' ] )->name( 'catalog.elite' );
Route::match(['get', 'post'], '/individuals',   [ CatalogController::class, 'showIndividualsCatalog' ] )->name( 'catalog.individuals' );
Route::match(['get', 'post'], '/cheap',         [ CatalogController::class, 'showCheapCatalog' ] )->name( 'catalog.cheap' );
Route::match(['get', 'post'], '/bdsm',          [ CatalogController::class, 'showBdsmCatalog' ] )->name( 'catalog.bdsm' );
Route::match(['get', 'post'], '/masseuses',     [ CatalogController::class, 'showMasseusesCatalog' ] )->name( 'catalog.masseuses' );

Route::get( '/{section}/{slug}', [ CatalogController::class, 'showProfileCatalog' ] )->name( 'catalog.profile' );



// REGENERATE PROFILE URL
//Route::get('/regProfile', [MainController::class, 'regenerateURL'])->name('regProfile');
//Route::get('/regMetro', [MainController::class, 'regMetroURL'])->name('regMetro');

require __DIR__.'/auth.php';
// PAGES
Route::get('/{slug}', [PageController::class, 'showPage'])->name('page');

