<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('agents')) {

            Schema::create('agents', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('website');
                $table->string('sita');
                $table->text('aftn');
                $table->timestamps();
            });
        }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
