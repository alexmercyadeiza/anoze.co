<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fid');
            $table->unsignedBigInteger('cid');
            $table->char('petrol')->default(0);
            $table->char('kerosene')->default(0);
            $table->char('gas')->default(0);
            $table->char('diesel')->default(0);
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
        Schema::dropIfExists('fuel_levels');
    }
}
