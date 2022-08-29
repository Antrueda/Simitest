<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHMotivoEgreusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_motivo_egreus', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('motivoe_id')->unsigned()->comment('NUMERO DE ID DE TIPO DE SEGUIMIENTO');
            $table->integer('motivoese_id')->unsigned()->comment('NUMERO DE ID DE SUBTIPO DE SEGUIMIENTO');
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motivo_egreus');
    }
}
