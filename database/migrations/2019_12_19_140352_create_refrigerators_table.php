<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefrigeratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrigerators', function (Blueprint $table) {
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
            $table->string('refrigeratortype')->nullable();
            $table->string('powersaveclass')->nullable();
            $table->string('kompressortype')->nullable();
            $table->string('kompressorcount')->nullable();
            $table->string('chamberfrostvolume')->nullable();
            $table->string('chamberdefrost')->nullable();
            $table->string('coolcameraseperatorcount')->nullable();
            $table->string('iceshelfcount')->nullable();
            $table->string('inflashlighticecam')->nullable();
            $table->string('inflashlight')->nullable();
            $table->string('chambericevolume')->nullable();
            $table->string('chambericedefrost')->nullable();
            $table->string('frostshelfcount')->nullable();
            $table->string('icecamlocation')->nullable();
            $table->string('opendoorsignal')->nullable();
            $table->string('icemaker')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('madein')->nullable();
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
        Schema::dropIfExists('refrigerators');
    }
}
