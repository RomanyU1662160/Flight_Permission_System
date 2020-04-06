<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('permissions')) {
            Schema::create('permissions', function (Blueprint $table) {
                $table->id();
                $table->integer('requester_id')->unsigned()->index();
                $table->integer('approver_id')->nullable()->unsigned()->index();
                $table->integer('state_id')->unsigned()->index();
                $table->string('ref');
                $table->text('info')->nullable();
                $table->timestamps();
                $table->foreign('requester_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('approver_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
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
        Schema::dropIfExists('permissions');
    }
}
