<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutocamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autocams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status')->nullable();
            $table->string('category');
            $table->string('brand');
            $table->string('type');
            $table->string('name');
            $table->string('price')->nullable();
            $table->string('img')->nullable();
            $table->string('tags')->nullable();
            $table->string('waranty')->nullable();
            $table->string('kredit')->nullable();
            $table->string('percentkredit')->nullable();
            $table->string('video')->nullable();
            $table->string('camcount')->nullable();
            $table->string('viewingangle')->nullable();
            $table->string('micro')->nullable();
            $table->string('screensize')->nullable();
            $table->string('videorecordingresolution')->nullable();
            $table->string('videoformation')->nullable();
            $table->string('internalmemory')->nullable();
            $table->string('sd')->nullable();
            $table->string('sdmax')->nullable();
            $table->string('autoconnection')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autocams');
    }
}
