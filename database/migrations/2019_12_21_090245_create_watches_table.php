<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
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
            $table->string('network')->nullable();
            $table->string('simcount')->nullable();
            $table->string('simsize')->nullable();
            $table->string('screensize')->nullable();
            $table->string('screenresolution')->nullable();
            $table->string('screentype')->nullable();
            $table->string('memory')->nullable();
            $table->string('cputype')->nullable();
            $table->string('cpucores')->nullable();
            $table->string('os')->nullable();
            $table->string('uncableble')->nullable();
            $table->string('wifi')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('nfc')->nullable();
            $table->string('navigation')->nullable();
            $table->string('bodysaver')->nullable();
            $table->string('replaceable')->nullable();
            $table->string('notification')->nullable();
            $table->string('bodymaterial')->nullable();
            $table->string('bracermaterial')->nullable();
            $table->string('bodycolor')->nullable();
            $table->string('bracercolor')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();
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
        Schema::dropIfExists('watches');
    }
}
