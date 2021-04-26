<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
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
            $table->string('os')->nullable();
            $table->string('cpu')->nullable();
            $table->string('cpucores')->nullable();
            $table->string('cpumghz')->nullable();
            $table->string('ram')->nullable();
            $table->string('physicmemory')->nullable();
            $table->string('memorytype')->nullable();
            $table->string('screensize')->nullable();
            $table->string('screenresolution')->nullable();
            $table->string('screentype')->nullable();
            $table->string('vga')->nullable();
            $table->string('vram')->nullable();
            $table->string('hdmi')->nullable();
            $table->string('usb')->nullable();
            $table->string('cardreader')->nullable();
            $table->string('audioconnection')->nullable();
            $table->string('lan')->nullable();
            $table->string('wifi')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('webcam')->nullable();
            $table->string('internalmicro')->nullable();
            $table->string('speakercount')->nullable();
            $table->string('optic')->nullable();
            $table->string('ledkeyboard')->nullable();
            $table->string('batary')->nullable();
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
        Schema::dropIfExists('notebooks');
    }
}
