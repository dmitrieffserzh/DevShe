<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'users_profiles', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'user_id' );
            $table->string( 'name', 160 );
            $table->date( 'age' );
            $table->text( 'description' )->nullable();
            $table->integer( 'balance' )->default( 0 );
            $table->timestamps();
        } );
    }


    public function down() {
        Schema::dropIfExists( 'users_profiles' );
    }
};
