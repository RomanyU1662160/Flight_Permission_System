<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('airlines')) {
            Schema::create('airlines', function (Blueprint $table) {
                $table->id();
                $table->integer('country_id')->nullable()->unsigned()->index();
                $table->integer('agent_id')->nullable()->unsigned()->index();
                $table->string('name');
                $table->string('icao');
                $table->string('iata');
                $table->text('info');
                $table->timestamps();
                $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
                $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airlines');
    }
}
