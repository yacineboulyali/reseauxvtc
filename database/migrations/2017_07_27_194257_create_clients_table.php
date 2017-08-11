<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email');//->unique();
            $table->string('password');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('langue')->nullable();
            $table->string('photo')->default('/profile.jpg');
            $table->string('numero_tel')->nullable();
            $table->string('address')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('auth_type')->default('client');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
