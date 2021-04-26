<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreadmakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bread_makers', function (Blueprint $table) {
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
            $table->string('display')->nullable();
            $table->string('formcover')->nullable();
            $table->string('cookingform')->nullable();
            $table->string('outform')->nullable();
            $table->string('programmode')->nullable();
            $table->string('breatprogram')->nullable();
            $table->string('speedheatingmode')->nullable();
            $table->string('heatingsave')->nullable();
            $table->string('startime')->nullable();
            $table->string('unwatercooking')->nullable();
            $table->string('doughwreath')->nullable();
            $table->string('cookingcolor')->nullable();
            $table->string('cookingsetweight')->nullable();
            $table->string('cookingmaxweight')->nullable();
            $table->string('power')->nullable();
            $table->string('antiheating')->nullable();
            $table->string('kidsave')->nullable();
            $table->string('bodymaterial')->nullable();
            $table->string('watchingwindow')->nullable();
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
        Schema::dropIfExists('bread_makers');
    }
}
