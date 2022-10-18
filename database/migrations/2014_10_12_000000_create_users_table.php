<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('userID');
            $table->string('userName');
            $table->string('userEmail')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('userGender');
            $table->date('userDoB');
            $table->string('userCountry');
            $table->string('userPhoto');
            $table->string('userRole');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
