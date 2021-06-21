<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposSisTcampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sis_tcampos', function (Blueprint $table) {
            $table->string('s_tablrela',40)->nullable()->comment('NOMBRE TABLA CON LA QUE SE RELACIONA EL CAMPO');
            $table->string('s_idtarela',40)->nullable()->comment('NOMBRE ID TABLA CON LA QUE SE RELACIONA EL CAMPO');
            $table->string('s_campsele',40)->nullable()->comment('NOMBRE DEL CAMPO QUE SE VA A SELECCIONAR EN EL JOIN');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
