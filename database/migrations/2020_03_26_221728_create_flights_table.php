<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('flights')) {
            Schema::create('flights', function (Blueprint $table) {
                $table->id();
                $table->integer('airline_id')->nullable()->unsigned()->index();
                $table->integer('permission_id')->nullable()->unsigned()->index();
                $table->integer('aircraft_id')->nullable()->unsigned()->index();
                $table->integer('origin_id')->nullable()->unsigned()->index();
                $table->integer('agent_id')->nullable()->unsigned()->index();
                $table->integer('destination_id')->nullable()->unsigned()->index();
                $table->string('nbr')->nullable();
                $table->string('callsign')->nullable();
                $table->date('dof')->nullable();
                $table->time('etd')->nullable();
                $table->time('eta')->nullable();
                $table->text('info')->nullable();
                $table->timestamps();
                $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
                $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
                $table->foreign('aircraft_id')->references('id')->on('aircrafts')->onDelete('cascade');
                $table->foreign('origin_id')->references('id')->on('airports')->onDelete('cascade');
                $table->foreign('destination_id')->references('id')->on('airports')->onDelete('cascade');
                $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
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
        Schema::dropIfExists('flights');
    }
}
