<?php

namespace App\Http\Controllers;

use App\Models\Page;


class PageController extends Controller {
    public function __construct() {
        // $this->middleware('auth');
    }

    public function showPage( $slug ) {

        $page = Page::where( 'active', '=', 1 )->where( 'slug', $slug )->first();

        return view( 'pages.page', [ 'page' => $page, 'heading' => $page->title ] );
    }
}
