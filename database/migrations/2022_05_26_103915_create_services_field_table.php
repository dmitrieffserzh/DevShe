<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'services_field', function ( Blueprint $table ) {
            $table->id();
            $table->integer( 'service_id' );
            $table->string( 'name', 255 );
        } );
    }

    public function down() {
        Schema::dropIfExists( 'services_field' );
    }
};
