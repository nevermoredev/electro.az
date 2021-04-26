<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvs', function (Blueprint $table) {
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
            $table->string('tvtype')->nullable();
            $table->string('smarttv')->nullable();
            $table->string('os')->nullable();
            $table->string('screensize')->nullable();
            $table->string('screentexno')->nullable();
            $table->string('screentype')->nullable();
            $table->string('screenresolution')->nullable();
            $table->string('screenformation')->nullable();
            $table->string('speakercount')->nullable();
            $table->string('speakerpower')->nullable();
            $table->string('3daudio')->nullable();
            $table->string('audioformation')->nullable();
            $table->string('hdmi')->nullable();
            $table->string('optic')->nullable();
            $table->string('usb')->nullable();
            $table->string('lan')->nullable();
            $table->string('wifi')->nullable();
            $table->string('cammodul')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('tvvideo')->nullable();
            $table->string('tvaudio')->nullable();
            $table->string('tvphoto')->nullable();
            $table->string('vesastandart')->nullable();
            $table->string('dimensionup')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weightup')->nullable();
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
        Schema::dropIfExists('tvs');
    }
}
