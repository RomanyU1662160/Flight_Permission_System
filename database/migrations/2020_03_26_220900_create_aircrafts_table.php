<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAircraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('aircrafts')) {
            Schema::create('aircrafts', function (Blueprint $table) {
                $table->id();
                $table->integer('country_id')->nullable()->unsigned()->index();
                $table->integer('flight_id')->nullable()->unsigned()->index();
                $table->string('reg');
                $table->string('type');
                $table->string('capacity');
                $table->timestamps();
                $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
                $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
            });
        }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aircrafts');
    }
}
