<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;


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
require __DIR__.'/auth.php';
Route::get( '/',                                                [ MainController::class, 'index' ]                      )->name( 'main' );

// SEARCH
Route::get(  'search',                                          [ SearchController::class, 'search' ]                   )->name( 'search' );
Route::post( 'search',                                          [ SearchController::class, 'search' ]                   )->name( 'search' );
Route::get(  'search-metro',                                    [ SearchController::class, 'searchMetro' ]              )->name( 'search.metro' );
Route::post( 'search-metro',                                    [ SearchController::class, 'searchMetro' ]              )->name( 'search.metro' );
Route::get(  'search-metro/devushki-na-stancii-metro-{slug?}',  [ SearchController::class, 'searchMetroResult' ]        )->name( 'search.metro.result' );


// ARTICLES
Route::get('articles',                                          [ PostController::class, 'index']                       )->name('post.index');
Route::get('articles/{slug}',                                   [ PostController::class, 'show']                        )->name('post.show');


// PROFILE
Route::get( 'profile',                                          [ ProfileController::class, 'index' ]                   )->name( 'profile.index' );
Route::get( 'profile/rates',                                    [ ProfileController::class, 'rates' ]                   )->name( 'profile.rates' );
Route::get( 'profile/payments',                                 [ ProfileController::class, 'payments' ]                )->name( 'profile.payments' );
Route::post('profile/upload',                                   [ ProfileController::class, 'uploadFiles' ]             )->name( 'profile.upload' );
Route::post('profile/delete',                                   [ ProfileController::class, 'deleteFiles' ]             )->name( 'profile.delete' );
Route::post('profile/sort',                                     [ ProfileController::class, 'sortFiles' ]               )->name( 'profile.sort' );
Route::post('profile/save',                                     [ ProfileController::class, 'saveProfile' ]             )->name( 'profile.save' );


// CATALOG GIRLS
Route::match(['get', 'post'], 'elite',                          [ CatalogController::class, 'showEliteCatalog' ]        )->name( 'catalog.elite' );
Route::match(['get', 'post'], 'individuals',                    [ CatalogController::class, 'showIndividualsCatalog' ]  )->name( 'catalog.individuals' );
Route::match(['get', 'post'], 'cheap',                          [ CatalogController::class, 'showCheapCatalog' ]        )->name( 'catalog.cheap' );
Route::match(['get', 'post'], 'bdsm',                           [ CatalogController::class, 'showBdsmCatalog' ]         )->name( 'catalog.bdsm' );
Route::match(['get', 'post'], 'masseuses',                      [ CatalogController::class, 'showMasseusesCatalog' ]    )->name( 'catalog.masseuses' );

Route::post('add-testimonial',                                  [ CatalogController::class, 'addTestimonial' ]          )->name( 'profile.add-testimonial' );

Route::get( '{section}/{slug}',                                 [ CatalogController::class, 'showProfileCatalog' ]      )->name( 'catalog.profile' );

// PAGES
Route::get('{slug}',                                            [ PageController::class, 'showPage']                    )->name('page');

