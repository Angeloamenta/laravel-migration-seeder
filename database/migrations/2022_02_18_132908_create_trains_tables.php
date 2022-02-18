<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains_tables', function (Blueprint $table) {
            $table->id();
            $table->string('agency');
            $table->string('departure_station', 200);
            $table->string('arrival_station', 200);
            $table->date('departure_day');
            $table->string('departure_time', 40);
            $table->string('arrival_time', 40);
            $table->string('code', 100);
            $table->integer('carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains_tables');
    }
}
