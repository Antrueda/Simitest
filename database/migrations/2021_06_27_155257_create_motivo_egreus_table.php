<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivoEgreusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivo_egreus', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('motivoe_id')->unsigned()->comment('NUMERO DE ID DE TIPO DE SEGUIMIENTO');
            $table->integer('motivoese_id')->unsigned()->comment('NUMERO DE ID DE SUBTIPO DE SEGUIMIENTO');
            $table->foreign('motivoe_id')->references('id')->on('motivo_egresos');
            $table->foreign('motivoese_id')->references('id')->on('motivo_egreso_secus');
            $table = CamposMagicos::magicos($table);
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
