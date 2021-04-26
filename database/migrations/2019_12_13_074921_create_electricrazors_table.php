<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectricrazorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricrazors', function (Blueprint $table) {
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
            $table->string('razortype')->nullable();
            $table->string('sessionpoweredtime')->nullable();
            $table->string('powerled')->nullable();
            $table->string('waterclean')->nullable();
            $table->string('conturrepeat')->nullable();
            $table->string('headcount')->nullable();
            $table->string('antiwatercover')->nullable();
            $table->string('trimmer')->nullable();
            $table->string('razormode')->nullable();
            $table->string('powerfulltime')->nullable();
            $table->string('autonomtime')->nullable();
            $table->string('batary')->nullable();
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
        Schema::dropIfExists('electric_razors');
    }
}
