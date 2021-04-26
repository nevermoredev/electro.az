<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditioners', function (Blueprint $table) {
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
            $table->string('amountpowerclass')->nullable();
            $table->string('compressortype')->nullable();
            $table->string('cooling')->nullable();
            $table->string('coolingmode')->nullable();
            $table->string('heating')->nullable();
            $table->string('heatingmode')->nullable();
            $table->string('maxflowrate')->nullable();
            $table->string('roomsize')->nullable();
            $table->string('involumelevel')->nullable();
            $table->string('outvolumelevel')->nullable();
            $table->string('nightmode')->nullable();
            $table->string('wifi')->nullable();
            $table->string('internalblockheight')->nullable();
            $table->string('internalblockwidth')->nullable();
            $table->string('internalblockdepth')->nullable();
            $table->string('externalblockheight')->nullable();
            $table->string('externalblockwidth')->nullable();
            $table->string('externalblockdepth')->nullable();
            $table->string('internalblockweight')->nullable();
            $table->string('externalblockweight')->nullable();
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
        Schema::dropIfExists('conditioners');
    }
}
