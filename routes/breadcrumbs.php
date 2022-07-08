<?php

use App\Helpers;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// HOME
Breadcrumbs::for( 'main', function ( BreadcrumbTrail $trail ) {
    $trail->push( 'Главная', route( 'main' ) );
} );

// HOME > CATALOG
//Breadcrumbs::for( 'catalog', function ( BreadcrumbTrail $trail, $heading ) {
//    $trail->parent( 'main' );
//    $trail->push( $heading, route( 'catalog.elite' ) );
//} );

//Breadcrumbs::for( 'catalog', function ( BreadcrumbTrail $trail, $title , $section_id ) {
//    $trail->parent( 'main' );
//    $trail->push( $title, route( 'catalog.'.Helpers::getGirlSectionUrlValue($section_id) ) );
//} );
//Breadcrumbs::for( 'catalog.elite', function ( BreadcrumbTrail $trail, $title , $section_id ) {
//    //$trail->parent( 'main' );
//    $trail->push( $title, route( 'catalog.'.Helpers::getGirlSectionUrlValue($section_id),$section_id ) );
//} );
//
//// HOME > CATALOG > ITEM
//Breadcrumbs::for( 'catalog.profile', function ( BreadcrumbTrail $trail, $heading, $section_id ) {
//    //$trail->parent( 'catalog.'.Helpers::getGirlSectionUrlValue($section_id)  );
//    $trail->push( $heading, route( 'catalog.profile' ) );
//} );



// HOME > ARTICLES
Breadcrumbs::for( 'posts', function ( BreadcrumbTrail $trail ) {
    $trail->parent( 'main' );
    $trail->push( 'Статьи', route( 'post.index' ) );
} );

// HOME > ARTICLES > ITEM
Breadcrumbs::for('posts.show', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('posts');
    $trail->push($post->title, route('post.show', $post));
});



// HOME > PROFILE
Breadcrumbs::for( 'profile', function ( BreadcrumbTrail $trail ) {
    $trail->parent( 'main' );
    $trail->push( 'Личный кабинет', route( 'profile.index' ) );
} );

// HOME > PROFILE > RATES
Breadcrumbs::for( 'profile.rates', function ( BreadcrumbTrail $trail, $heading ) {
    $trail->parent( 'profile' );
    $trail->push( $heading, route( 'profile.payments' ) );
} );

// HOME > PROFILE > PAYMENT
Breadcrumbs::for( 'profile.payments', function ( BreadcrumbTrail $trail, $heading ) {
    $trail->parent( 'profile' );
    $trail->push( $heading, route( 'profile.payments' ) );
} );



// HOME > SEARCH
Breadcrumbs::for( 'search', function ( BreadcrumbTrail $trail ) {
    $trail->parent( 'main' );
    $trail->push( 'Результаты поиска', route( 'search' ) );
} );

// HOME > SEARCH-METRO
Breadcrumbs::for( 'search.metro', function ( BreadcrumbTrail $trail ) {
    $trail->parent( 'main' );
    $trail->push( 'Поиск по метро', route( 'search.metro' ) );
} );



/* PAGES =============================================== */
// HOME > SEARCH > METRO
Breadcrumbs::for('pages', function (BreadcrumbTrail $trail, $page) {
    $trail->parent('main');
    $trail->push($page->title, route('page', $page));
});

