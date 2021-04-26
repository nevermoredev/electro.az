<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
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
            $table->string('simtype')->nullable();
            $table->string('screensize')->nullable();
            $table->string('screenresolution')->nullable();
            $table->string('screentype')->nullable();
            $table->string('ram')->nullable();
            $table->string('memory')->nullable();
            $table->string('sd')->nullable();
            $table->string('cpu')->nullable();
            $table->string('cores')->nullable();
            $table->string('cpumghz')->nullable();
            $table->string('os')->nullable();
            $table->string('ocamera')->nullable();
            $table->string('jcamera')->nullable();
            $table->string('diafragma')->nullable();
            $table->string('zoom')->nullable();
            $table->string('autofokus')->nullable();
            $table->string('ledflash')->nullable();
            $table->string('videorecording')->nullable();
            $table->string('frontcamera')->nullable();
            $table->string('batary')->nullable();
            $table->string('uncablecharge')->nullable();
            $table->string('cablecharge')->nullable();
            $table->string('wifi')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('nfc')->nullable();
            $table->string('navigation')->nullable();
            $table->string('security')->nullable();
            $table->string('bioscaner')->nullable();
            $table->string('micinput')->nullable();
            $table->string('material')->nullable();
            $table->string('dimensions')->nullable();
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
        Schema::dropIfExists('smartphones');
    }
}
