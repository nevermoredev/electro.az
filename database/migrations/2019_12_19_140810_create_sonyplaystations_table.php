<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSonyplaystationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sonyplaystations', function (Blueprint $table) {
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
            $table->string('cputype')->nullable();
            $table->string('cpucount')->nullable();
            $table->string('gputype')->nullable();
            $table->string('gpuram')->nullable();
            $table->string('intenalmemory')->nullable();
            $table->string('dvd')->nullable();
            $table->string('blueray')->nullable();
            $table->string('wifi')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('hdmi')->nullable();
            $table->string('usb')->nullable();
            $table->string('lan')->nullable();
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
        Schema::dropIfExists('sonyplaystations');
    }
}
