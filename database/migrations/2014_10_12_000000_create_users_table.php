<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'users', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'user_type' )->default(0);
            $table->string( 'name' );
            $table->integer( 'age' );
            $table->string( 'city' );
            $table->string( 'email' )->unique();
            $table->timestamp( 'email_verified_at' )->nullable();
            $table->string( 'password' );
            $table->rememberToken();
            $table->timestamps();
        } );
    }

    public function down() {
        Schema::dropIfExists( 'users' );
    }
};
