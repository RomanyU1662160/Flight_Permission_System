<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->integer('agent_id')->nullable()->unsigned()->index();
                $table->integer('airline_id')->nullable()->unsigned()->index();
                $table->string('fname');
                $table->string('lname');
                $table->string('username');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
                $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
                $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
            });
        }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
