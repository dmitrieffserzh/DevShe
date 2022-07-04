<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'pages', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'active' )->default( 1 );
            $table->string( 'slug' );
            $table->string( 'title' );
            $table->longText( 'content' )->nullable();
            $table->timestamps();
        } );
    }

    public function down() {
        Schema::dropIfExists( 'pages' );
    }
};
