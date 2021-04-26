<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudiosystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiosystems', function (Blueprint $table) {
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
            $table->string('weight')->nullable();
            $table->string('karaoke')->nullable();
            $table->string('chanelcount')->nullable();
            $table->string('hdmi')->nullable();
            $table->string('fmturner')->nullable();
            $table->string('display')->nullable();
            $table->string('formations')->nullable();
            $table->string('externaldevices')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('audioconnection')->nullable();
            $table->string('microoutput')->nullable();
            $table->string('rcaoutput')->nullable();
            $table->string('rds')->nullable();
            $table->string('usb')->nullable();
            $table->string('audiopower')->nullable();
            $table->string('dimension')->nullable();
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
        Schema::dropIfExists('audiosystems');
    }
}
