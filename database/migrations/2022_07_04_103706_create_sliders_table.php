<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'slides', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'active' )->default( 1 );
            $table->integer( 'sort' )->default( 1 );
            $table->string( 'image' );
            $table->string( 'title' );
            $table->text( 'description' )->nullable();
            $table->string( 'button_link' )->nullable();
            $table->string( 'button_text' )->nullable();
            $table->timestamps();
        } );
    }

    public function down() {
        Schema::dropIfExists( 'slides' );
    }
};
