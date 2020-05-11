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
                $table->string('website')->nullable();;
                $table->string('sita')->nullable();;
                $table->text('aftn')->nullable();;
                $table->text('address')->nullable();
                $table->text('phone')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('agents');
    }
}
