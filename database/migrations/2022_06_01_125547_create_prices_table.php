<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'prices', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'profile_id' )->unsigned();
            $table->string( 'day_one_hour_in' )->default( 0 );
            $table->string( 'day_two_hours_in' )->default( 0 );
            $table->string( 'day_one_hour_out' )->default( 0 );
            $table->string( 'day_two_hours_out' )->default( 0 );
            $table->string( 'night_one_hour_in' )->default( 0 );
            $table->string( 'night_two_hours_in' )->default( 0 );
            $table->string( 'night_one_hour_out' )->default( 0 );
            $table->string( 'night_two_hours_out' )->default( 0 );

            $table->foreign( 'profile_id' )->references( 'id' )->on( 'profiles' )->onDelete( 'cascade' );
        } );
    }


    public function down() {
        Schema::dropIfExists( 'prices' );
    }
};
