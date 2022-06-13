<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'prices', function ( Blueprint $table ) {
            $table->id();
            $table->bigInteger( 'profile_id' )->unsigned();
            $table->string( 'day_one_hour_in' )->nullable();
            $table->string( 'day_two_hours_in' )->nullable();
            $table->string( 'day_one_hour_out' )->nullable();
            $table->string( 'day_two_hours_out' )->nullable();
            $table->string( 'night_one_hour_in' )->nullable();
            $table->string( 'night_two_hours_in' )->nullable();
            $table->string( 'night_one_hour_out' )->nullable();
            $table->string( 'night_two_hours_out' )->nullable();
            $table->string( 'night_all_in' )->nullable();
            $table->string( 'night_all_out' )->nullable();

            $table->foreign( 'profile_id' )->references( 'id' )->on( 'profiles' )->onDelete( 'cascade' );
        } );
    }


    public function down() {
        Schema::dropIfExists( 'prices' );
    }
};
