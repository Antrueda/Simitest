<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObservacionToAsissemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asissemas', function (Blueprint $table) {
            $table->text('descripcion')->nullable()->comment('DESCRIPCION DE ASISTENCIA SEMANAL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asissemas', function (Blueprint $table) {
            $table->dropColumn('descripcion');
        });
    }
}
