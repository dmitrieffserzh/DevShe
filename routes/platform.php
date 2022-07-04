<?php

declare( strict_types=1 );

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;


use Illuminate\Support\Facades\Artisan;

use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Girl\GirlListScreen;
use App\Orchid\Screens\Girl\GirlEditScreen;
use App\Orchid\Screens\Rate\RateListScreen;
use App\Orchid\Screens\Rate\RateEditScreen;
use App\Orchid\Screens\Post\PostEditScreen;
use App\Orchid\Screens\Post\PostListScreen;
use App\Orchid\Screens\Slider\SliderEditScreen;
use App\Orchid\Screens\Slider\SliderListScreen;
use App\Orchid\Screens\Page\PageEditScreen;
use App\Orchid\Screens\Page\PageListScreen;

use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// MAIN
Route::screen( 'main', PlatformScreen::class )
     ->name( 'platform.main' );

// GIRLS ============================================================================================================ //
// MAIN > GIRLS > EDIT
Route::screen( 'girls/{profile}/edit', GirlEditScreen::class )
     ->name( 'platform.girls.edit' )
     ->breadcrumbs( function ( Trail $trail, $profile ) {
         return $trail
             ->parent( 'platform.girls' )
             ->push( __( 'Edit' ), route( 'platform.girls.edit', $profile ) );
     } );

// MAIN > GIRLS > CREATE
Route::screen( 'girls/create', GirlEditScreen::class )
     ->name( 'platform.girls.create' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.girls' )
             ->push( __( 'Create' ), route( 'platform.girls.create' ) );
     } );

// MAIN > GIRLS
Route::screen( 'girls', GirlListScreen::class )
     ->name( 'platform.girls' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( 'Профили девушек' );
     } );


// MANS
Route::screen( 'mens', PlatformScreen::class )
     ->name( 'platform.men' );

// RATES ============================================================================================================ //
// MAIN > RATES > EDIT
Route::screen( 'rates/{profile}/edit', RateEditScreen::class )
     ->name( 'platform.rates.edit' )
     ->breadcrumbs( function ( Trail $trail, $rate ) {
         return $trail
             ->parent( 'platform.rates' )
             ->push( __( 'Edit' ), route( 'platform.rates.edit', $rate ) );
     } );
// MAIN > RATES
Route::screen( 'rates', RateListScreen::class )
     ->name( 'platform.rates' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( 'Тарифы' );
     } );


// POSTS ============================================================================================================ //
// MAIN > POSTS > EDIT
Route::screen( 'posts/{slug}/edit', PostEditScreen::class )
     ->name( 'platform.posts.edit' )
     ->breadcrumbs( function ( Trail $trail, $post ) {
         return $trail
             ->parent( 'platform.posts' )
             ->push( __( 'Edit' ), route( 'platform.posts.edit', $post ) );
     } );
// MAIN > POSTS > CREATE
Route::screen( 'posts/create', PostEditScreen::class )
     ->name( 'platform.posts.create' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.posts' )
             ->push( __( 'Create' ), route( 'platform.posts.create' ) );
     } );
// MAIN > POSTS
Route::screen( 'posts', PostListScreen::class )
     ->name( 'platform.posts' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( 'Статьи' );
     } );

// PAGES ============================================================================================================ //
// MAIN > PAGES > EDIT
Route::screen( 'pages/{slug}/edit', PageEditScreen::class )
     ->name( 'platform.pages.edit' )
     ->breadcrumbs( function ( Trail $trail, $page ) {
         return $trail
             ->parent( 'platform.pages' )
             ->push( __( 'Edit' ), route( 'platform.pages.edit', $page ) );
     } );
// MAIN > PAGES > CREATE
Route::screen( 'pages/create', PageEditScreen::class )
     ->name( 'platform.pages.create' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.pages' )
             ->push( __( 'Create' ), route( 'platform.pages.create' ) );
     } );
// MAIN > PAGES
Route::screen( 'pages', PageListScreen::class )
     ->name( 'platform.pages' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( 'Страницы' );
     } );

// SLIDER =========================================================================================================== //
// MAIN > SLIDER > EDIT
Route::screen( 'slides/{id}/edit', SliderEditScreen::class )
     ->name( 'platform.slides.edit' )
     ->breadcrumbs( function ( Trail $trail, $slide ) {
         return $trail
             ->parent( 'platform.slides' )
             ->push( __( 'Edit' ), route( 'platform.slides.edit', $slide ) );
     } );
// MAIN > SLIDER > CREATE
Route::screen( 'slides/create', SliderEditScreen::class )
     ->name( 'platform.slides.create' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.slides' )
             ->push( __( 'Create' ), route( 'platform.slides.create' ) );
     } );
// MAIN > SLIDER
Route::screen( 'slides', SliderListScreen::class )
     ->name( 'platform.slides' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( 'Слайды' );
     } );

//
//
//
//
// Platform > Profile
Route::screen( 'profile', UserProfileScreen::class )
     ->name( 'platform.profile' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( __( 'Profile' ), route( 'platform.profile' ) );
     } );

// Platform > System > Users
Route::screen( 'users/{user}/edit', UserEditScreen::class )
     ->name( 'platform.systems.users.edit' )
     ->breadcrumbs( function ( Trail $trail, $user ) {
         return $trail
             ->parent( 'platform.systems.users' )
             ->push( __( 'User' ), route( 'platform.systems.users.edit', $user ) );
     } );

// Platform > System > Users > Create
Route::screen( 'users/create', UserEditScreen::class )
     ->name( 'platform.systems.users.create' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.systems.users' )
             ->push( __( 'Create' ), route( 'platform.systems.users.create' ) );
     } );

// Platform > System > Users > User
Route::screen( 'users', UserListScreen::class )
     ->name( 'platform.systems.users' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( __( 'Users' ), route( 'platform.systems.users' ) );
     } );

// Platform > System > Roles > Role
Route::screen( 'roles/{role}/edit', RoleEditScreen::class )
     ->name( 'platform.systems.roles.edit' )
     ->breadcrumbs( function ( Trail $trail, $role ) {
         return $trail
             ->parent( 'platform.systems.roles' )
             ->push( __( 'Role' ), route( 'platform.systems.roles.edit', $role ) );
     } );

// Platform > System > Roles > Create
Route::screen( 'roles/create', RoleEditScreen::class )
     ->name( 'platform.systems.roles.create' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.systems.roles' )
             ->push( __( 'Create' ), route( 'platform.systems.roles.create' ) );
     } );

// Platform > System > Roles
Route::screen( 'roles', RoleListScreen::class )
     ->name( 'platform.systems.roles' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( __( 'Roles' ), route( 'platform.systems.roles' ) );
     } );

// Example...
Route::screen( 'example', ExampleScreen::class )
     ->name( 'platform.example' )
     ->breadcrumbs( function ( Trail $trail ) {
         return $trail
             ->parent( 'platform.index' )
             ->push( 'Example screen' );
     } );

Route::screen( 'example-fields', ExampleFieldsScreen::class )->name( 'platform.example.fields' );
Route::screen( 'example-layouts', ExampleLayoutsScreen::class )->name( 'platform.example.layouts' );
Route::screen( 'example-charts', ExampleChartsScreen::class )->name( 'platform.example.charts' );
Route::screen( 'example-editors', ExampleTextEditorsScreen::class )->name( 'platform.example.editors' );
Route::screen( 'example-cards', ExampleCardsScreen::class )->name( 'platform.example.cards' );
Route::screen( 'example-advanced', ExampleFieldsAdvancedScreen::class )->name( 'platform.example.advanced' );

//Route::screen('idea', Idea::class, 'platform.screens.idea');
