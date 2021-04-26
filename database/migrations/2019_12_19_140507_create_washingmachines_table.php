<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWashingmachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washingmachines', function (Blueprint $table) {
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
            $table->string('washingmachinetype')->nullable();
            $table->string('powersaveclass')->nullable();
            $table->string('waterusingvolume')->nullable();
            $table->string('enginetype')->nullable();
            $table->string('cargocompartment')->nullable();
            $table->string('maxcargo')->nullable();
            $table->string('washclass')->nullable();
            $table->string('dryingclass')->nullable();
            $table->string('rotationspeed')->nullable();
            $table->string('washingsoundlevel')->nullable();
            $table->string('dryingsounglevel')->nullable();
            $table->string('programmodecount')->nullable();
            $table->string('disbalancecontrol')->nullable();
            $table->string('antileak')->nullable();
            $table->string('kidlock')->nullable();
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('madein')->nullable();
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
        Schema::dropIfExists('washingmachines');
    }
}
