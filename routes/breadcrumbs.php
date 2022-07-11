<?php

use App\Helpers;
use App\Models\Profile;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// HOME
Breadcrumbs::for('main', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('main'));
});

// HOME > CATALOG
Breadcrumbs::for('catalog.elite', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('main');
    $trail->push($title, route('catalog.elite'));
});
Breadcrumbs::for('catalog.individuals', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('main');
    $trail->push($title, route('catalog.individuals'));
});
Breadcrumbs::for('catalog.cheap', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('main');
    $trail->push($title, route('catalog.cheap'));
});
Breadcrumbs::for('catalog.bdsm', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('main');
    $trail->push($title, route('catalog.bdsm'));
});
Breadcrumbs::for('catalog.masseuses', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('main');
    $trail->push($title, route('catalog.masseuses'));
});

Breadcrumbs::for('catalog.profile', function (BreadcrumbTrail $trail, $profile) {
    $trail->parent('main');

    if ($profile->section == 1) $trail->push('Элитные', '/elite');
    if ($profile->section == 2) $trail->push('Индивидуалки', '/individuals');
    if ($profile->section == 3) $trail->push('Дешевые', '/cheap');
    if ($profile->section == 4) $trail->push('БДСМ', '/bdsm');
    if ($profile->section == 5) $trail->push('Массажистки', '/masseuses');

    $trail->push($profile->name, route('catalog.profile', ['section' => \App\Helpers::getGirlSectionUrlValue($profile->section), 'slug' => $profile->slug]));
});

// HOME > ARTICLES
Breadcrumbs::for('posts', function (BreadcrumbTrail $trail) {
    $trail->parent('main');
    $trail->push('Статьи', route('post.index'));
});

// HOME > ARTICLES > ITEM
Breadcrumbs::for('posts.show', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('posts');
    $trail->push($post->title, route('post.show', $post));
});


// HOME > PROFILE
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('main');
    $trail->push('Личный кабинет', route('profile.index'));
});

// HOME > PROFILE > RATES
Breadcrumbs::for('profile.rates', function (BreadcrumbTrail $trail, $heading) {
    $trail->parent('profile');
    $trail->push($heading, route('profile.payments'));
});

// HOME > PROFILE > PAYMENT
Breadcrumbs::for('profile.payments', function (BreadcrumbTrail $trail, $heading) {
    $trail->parent('profile');
    $trail->push($heading, route('profile.payments'));
});


// HOME > SEARCH
Breadcrumbs::for('search', function (BreadcrumbTrail $trail) {
    $trail->parent('main');
    $trail->push('Результаты поиска', route('search'));
});

// HOME > SEARCH-METRO
Breadcrumbs::for('search.metro', function (BreadcrumbTrail $trail) {
    $trail->parent('main');
    $trail->push('Поиск по метро', route('search.metro'));
});


/* PAGES =============================================== */
// HOME > SEARCH > METRO
Breadcrumbs::for('pages', function (BreadcrumbTrail $trail, $page) {
    $trail->parent('main');
    $trail->push($page->title, route('page', $page));
});

