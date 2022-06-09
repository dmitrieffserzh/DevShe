<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'services_field', function ( Blueprint $table ) {
            $table->id();
            $table->bigInteger( 'service_id' );
            $table->string( 'name', 255 );
            $table->integer('sort')->default(100);
        } );
    }

    public function down() {
        Schema::dropIfExists( 'services_field' );
    }
};
