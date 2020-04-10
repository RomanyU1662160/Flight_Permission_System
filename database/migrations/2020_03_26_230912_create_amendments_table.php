<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmendmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('amendments')) {
            Schema::create('amendments', function (Blueprint $table) {
                $table->id();
                $table->integer('permission_id')->unsigned()->index();
                $table->integer('requester_id')->unsigned()->index();
                $table->integer('approver_id')->unsigned()->index();
                $table->integer('state_id')->unsigned()->index();
                $table->integer('flight_id')->unsigned()->index();
                $table->string('ref');
                $table->text('info');
                $table->timestamps();
                $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
                $table->foreign('requester_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('approver_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
                $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
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
        Schema::dropIfExists('amendments');
    }
}
