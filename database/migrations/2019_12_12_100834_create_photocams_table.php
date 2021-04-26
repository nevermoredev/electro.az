<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotocamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photocams', function (Blueprint $table) {
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
            $table->string('iso')->nullable();
            $table->string('maxresolution')->nullable();
            $table->string('matrixtype')->nullable();
            $table->string('matrixsize')->nullable();
            $table->string('hdmi')->nullable();
            $table->string('weight')->nullable();
            $table->string('dimension')->nullable();
            $table->string('color')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('sd')->nullable();
            $table->string('batary')->nullable();
            $table->string('batarytype')->nullable();
            $table->string('interface')->nullable();
            $table->string('internalmicro')->nullable();
            $table->string('screensize')->nullable();
            $table->string('antiblind')->nullable();
            $table->string('foxuscount')->nullable();
            $table->string('manualfoxus')->nullable();
            $table->string('autofoxus')->nullable();
            $table->string('minimaldirectrecording')->nullable();
            $table->string('diafragma')->nullable();
            $table->string('stabilizator')->nullable();
            $table->string('foxusdirection')->nullable();
            $table->string('objectivmodel')->nullable();
            $table->string('swapobjectiv')->nullable();
            $table->string('objectivcount')->nullable();
            $table->string('cputype')->nullable();
            $table->string('videorecording')->nullable();
            $table->string('videorecordingresolution')->nullable();
            $table->string('imgconvert')->nullable();
            $table->string('diafragmaprioritet')->nullable();
            $table->string('deklansor')->nullable();
            $table->string('portrait')->nullable();
            $table->string('macrorecording')->nullable();
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
        Schema::dropIfExists('photocams');
    }
}
