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
            $table->string( 'phone', 160 )->nullable();
            $table->string( 'whatsapp', 255 )->nullable();
            $table->string( 'telegram', 255 )->nullable();
            $table->integer( 'age' )->nullable();
            $table->integer( 'height' )->nullable();
            $table->integer( 'weight' )->nullable();
            $table->integer( 'breast_size' )->nullable();
            $table->integer( 'breast_type' )->nullable()->default( 0 );
            $table->integer( 'appearance' )->nullable()->default( 0 );
            $table->integer( 'section' )->nullable()->default( 0 );
            $table->string( 'city', 160 )->nullable();
            $table->integer( 'haircut' )->nullable()->default( 0 );
            $table->integer( 'haircolor' )->nullable()->default( 0 );
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
