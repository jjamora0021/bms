<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBOQTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boq', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->integer('diameter');
            $table->string('unit_of_measurement');
            $table->integer('quantity');
            $table->integer('linear_meter');
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
        Schema::dropIfExists('b_o_q');
    }
}
