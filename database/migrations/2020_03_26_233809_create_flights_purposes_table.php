<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsPurposesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights_purposes', function (Blueprint $table) {
            $table->id();
            $table->integer('flight_id')->unsigned()->index();
            $table->integer('purpose_id')->unsigned()->index();
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
            $table->foreign('purpose_id')->references('id')->on('purposes')->onDelete('cascade');
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
        Schema::dropIfExists('flights_purposes');
    }
}
