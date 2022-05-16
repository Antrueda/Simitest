<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMaxinasistenciaToSisDepens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sis_depens', function (Blueprint $table) {
            $table->tinyInteger('maxinasistencia')->default(45)->comment('NUMERO MAXIMO DE INAXISTENCIAS');
        });
        Schema::table('h_sis_depens', function (Blueprint $table) {
            $table->tinyInteger('maxinasistencia')->default(45)->comment('NUMERO MAXIMO DE INAXISTENCIAS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sis_depens', function (Blueprint $table) {
            $table->dropColumn('maxinasistencia');
        });

        Schema::table('h_sis_depens', function (Blueprint $table) {
            $table->dropColumn('maxinasistencia');
        });
    }
}
