<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'profile_station', function ( Blueprint $table ) {
            $table->integer( 'profile_id' )->unsigned();
            $table->integer( 'station_id' )->unsigned();

            $table->foreign( 'profile_id' )->references( 'id' )->on( 'profiles' )->onDelete( 'cascade' );
        } );
    }


    public function down() {
        Schema::dropIfExists( 'profile_station' );
    }
};
