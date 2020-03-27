<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('airports')) {
            Schema::create('airports', function (Blueprint $table) {
                $table->id();
                $table->integer('country_id')->nullable()->unsigned()->index();
                $table->string('name');
                $table->string('icao');
                $table->string('iata');
                $table->timestamps();
                $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

            });
        }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
