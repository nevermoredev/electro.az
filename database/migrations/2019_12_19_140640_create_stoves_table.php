<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoves', function (Blueprint $table) {
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
            $table->string('powersaveclass')->nullable();
            $table->string('managmenttype')->nullable();
            $table->string('timer')->nullable();
            $table->string('display')->nullable();
            $table->string('volume')->nullable();
            $table->string('convection')->nullable();
            $table->string('defrost')->nullable();
            $table->string('telescoppick')->nullable();
            $table->string('flashlight')->nullable();
            $table->string('kidlock')->nullable();
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
        Schema::dropIfExists('stoves');
    }
}
