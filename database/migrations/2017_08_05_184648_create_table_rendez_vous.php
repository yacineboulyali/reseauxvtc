<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRendezVous extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date')->default(Carbon::now());
            $table->string('nombre_passger');
            $table->string('address_depart');
            $table->string('address_arrive');
            $table->string('commantaire')->nullable();
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
        Schema::dropIfExists('rendez_vous');
    }
}
