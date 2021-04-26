<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blenders', function (Blueprint $table) {
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
            $table->string('headers')->nullable();
            $table->string('cookwarecapacity')->nullable();
            $table->string('measuringсup')->nullable();
            $table->string('minishredder')->nullable();
            $table->string('shredder')->nullable();
            $table->string('wreathforstirring')->nullable();
            $table->string('disctosplit')->nullable();
            $table->string('icesplitting')->nullable();
            $table->string('lubrication')->nullable();
            $table->string('managmentmode')->nullable();
            $table->string('speedmode')->nullable();
            $table->string('speededucation')->nullable();
            $table->string('powerconsumption')->nullable();
            $table->string('bodymaterial')->nullable();
            $table->string('cupmaterial')->nullable();
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
        Schema::dropIfExists('blenders');
    }
}
