<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeedrippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffeedrippings', function (Blueprint $table) {
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
            $table->string('maxpressure')->nullable();
            $table->string('usekofe')->nullable();
            $table->string('twocupontime')->nullable();
            $table->string('steamgiveng')->nullable();
            $table->string('timer')->nullable();
            $table->string('expresso')->nullable();
            $table->string('capucino')->nullable();
            $table->string('watervolume')->nullable();
            $table->string('outvolume')->nullable();
            $table->string('waterlevel')->nullable();
            $table->string('bodymaterial')->nullable();
            $table->string('power')->nullable();
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
        Schema::dropIfExists('coffeedrippings');
    }
}
