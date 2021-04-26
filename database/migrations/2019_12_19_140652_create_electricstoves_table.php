<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectricstovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricstoves', function (Blueprint $table) {
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
            $table->string('stovevolume')->nullable();
            $table->string('conforcount')->nullable();
            $table->string('electricconfor')->nullable();
            $table->string('gaasconfor')->nullable();
            $table->string('autofire')->nullable();
            $table->string('cap')->nullable();
            $table->string('electricstovetype')->nullable();
            $table->string('convection')->nullable();
            $table->string('flashlight')->nullable();
            $table->string('dimension')->nullable();
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
        Schema::dropIfExists('electricstoves');
    }
}
