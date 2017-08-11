<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConducteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email');//->unique();
            $table->string('password');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('langue')->nullable();
            $table->string('photo')->default('/profile.jpg');
            $table->string('numero_tel')->nullable();
            $table->string('url_site')->nullable();
            $table->string('address')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('permis_conduire')->nullable();
            $table->string('casier_judiciare')->nullable();
            $table->string('piece_identite')->nullable();
            $table->string('notation')->nullable();
            $table->string('auth_type')->default('conducteur');
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
        Schema::drop('conducteurs');
    }
}
