<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'profiles', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'user_id' );
            $table->string( 'name', 160 );
            $table->string( 'phone', 160 );
            $table->string( 'whatsapp', 255 )->nullable();
            $table->string( 'telegram', 255 )->nullable();
            $table->date( 'age' );
            $table->integer( 'height' )->nullable();
            $table->integer( 'weight' )->nullable();
            $table->integer( 'breast_size' );
            $table->integer( 'breast_type' );
            $table->integer( 'appearance' );
            $table->integer( 'section' );
            $table->integer( 'express' );
            $table->integer( 'meeting_place' );
            $table->string( 'city', 160 );
            $table->integer( 'haircut' )->nullable();
            $table->text( 'description' )->nullable();
            $table->text( 'images' )->nullable();
            $table->text( 'videos' )->nullable();
            $table->integer( 'balance' )->default( 0 );
        } );
    }

    public function down() {
        Schema::dropIfExists( 'profiles' );
    }
};
