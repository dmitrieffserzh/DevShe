<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'profiles', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'user_id' )->nullable();
            $table->string('slug');
            $table->integer( 'active' )->default( 1 );
            $table->integer( 'private' )->default( 0 );
            $table->integer( 'express' )->default( 0 );
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
            $table->string( 'city', 160 );
            $table->integer( 'haircut' )->nullable();
            $table->integer( 'haircolor' );
            $table->text( 'description' )->nullable();
            $table->integer( 'balance' )->default( 0 );
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        } );
    }

    public function down() {
        Schema::dropIfExists( 'profiles' );
    }
};
