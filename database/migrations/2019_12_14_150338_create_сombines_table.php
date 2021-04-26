<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateсombinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('сombines', function (Blueprint $table) {
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
            $table->string('speedmode')->nullable();
            $table->string('headerscount')->nullable();
            $table->string('spliter')->nullable();
            $table->string('wreathforstirring')->nullable();
            $table->string('doughhook')->nullable();
            $table->string('wringer')->nullable();
            $table->string('cupmaterial')->nullable();
            $table->string('cupvolume')->nullable();
            $table->string('power')->nullable();
            $table->string('antiheating')->nullable();
            $table->string('bodymaterial')->nullable();
            $table->string('headersbox')->nullable();
            $table->string('cabelbox')->nullable();
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
        Schema::dropIfExists('сombines');
    }
}
