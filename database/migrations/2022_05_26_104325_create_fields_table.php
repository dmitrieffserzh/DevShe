<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->bigInteger('field_id');
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fields');
    }
};
