<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKreditPercentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit_percents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('ay_2')->nullable();
            $table->integer('ay_3')->nullable();
            $table->integer('ay_4')->nullable();
            $table->integer('ay_5')->nullable();
            $table->integer('ay_6')->nullable();
            $table->integer('ay_7')->nullable();
            $table->integer('ay_8')->nullable();
            $table->integer('ay_9')->nullable();
            $table->integer('ay_10')->nullable();
            $table->integer('ay_11')->nullable();
            $table->integer('ay_12')->nullable();
            $table->integer('ay_13')->nullable();
            $table->integer('ay_14')->nullable();
            $table->integer('ay_15')->nullable();
            $table->integer('ay_16')->nullable();
            $table->integer('ay_17')->nullable();
            $table->integer('ay_18')->nullable();
            $table->integer('ay_19')->nullable();
            $table->integer('ay_20')->nullable();
            $table->integer('ay_21')->nullable();
            $table->integer('ay_22')->nullable();
            $table->integer('ay_23')->nullable();
            $table->integer('ay_24')->nullable();
            $table->integer('ay_25')->nullable();
            $table->integer('ay_26')->nullable();
            $table->integer('ay_27')->nullable();
            $table->integer('ay_28')->nullable();
            $table->integer('ay_29')->nullable();
            $table->integer('ay_30')->nullable();
            $table->integer('ay_31')->nullable();
            $table->integer('ay_32')->nullable();
            $table->integer('ay_33')->nullable();
            $table->integer('ay_34')->nullable();
            $table->integer('ay_35')->nullable();
            $table->integer('ay_36')->nullable();
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
        Schema::dropIfExists('kredit_percents');
    }
}
