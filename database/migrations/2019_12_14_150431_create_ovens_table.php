<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOvensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ovens', function (Blueprint $table) {
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
            $table->string('managmenttype')->nullable();
            $table->string('doorout')->nullable();
            $table->string('timer')->nullable();
            $table->string('starttime')->nullable();
            $table->string('involume')->nullable();
            $table->string('ventdiametr')->nullable();
            $table->string('inkameramaterial')->nullable();
            $table->string('flashlight')->nullable();
            $table->string('programmode')->nullable();
            $table->string('cookingprogram')->nullable();
            $table->string('autocooking')->nullable();
            $table->string('microwavepower')->nullable();
            $table->string('powermode')->nullable();
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
        Schema::dropIfExists('ovens');
    }
}
