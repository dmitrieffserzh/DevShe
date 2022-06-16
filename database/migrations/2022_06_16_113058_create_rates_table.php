<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create( 'rates', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' );
            $table->text( 'description' )->nullable();
            $table->string( 'plan_one_name' )->nullable();
            $table->integer( 'plan_one_price' )->nullable();
            $table->string( 'plan_two_name' )->nullable();
            $table->integer( 'plan_two_price' )->nullable();
            $table->string( 'plan_three_name' )->nullable();
            $table->integer( 'plan_three_price' )->nullable();
            $table->text( 'information' )->nullable();
        } );
    }

    public function down() {
        Schema::dropIfExists( 'rates' );
    }
};
