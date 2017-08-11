<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsucteursVehiculesRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            //
            $table->integer('conducteur_id')->unsigned();
            $table->foreign('conducteur_id')->references('id')->on('conducteurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            //
            $table->dropForeign('conducteur_id');
            $table->dropColumn('conducteur_id');
        });
    }
}
