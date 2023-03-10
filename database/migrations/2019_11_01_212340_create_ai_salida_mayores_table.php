<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAiSalidamayoresTable extends Migration
{
    private $tablaxxx = 'ai_salida_mayores';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            //$table->integer('sis_nnaj_id')->unsigned();
            $table->date('fecha')->comment('CAMPO FECHA DE LA SALIDA O PERMISO');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->integer('user_doc1_id')->unsigned()->comment('CAMPO PERSONA QUE DILIGENCIA');
            $table->integer('user_doc2_id')->unsigned()->comment('CAMPO RESPONSABLE DE LA UPI O DEPENDENCIA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id', 'aisama_pk1')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('prm_upi_id', 'aisama_pk2')->references('id')->on('sis_depens');
            $table->foreign('user_doc1_id', 'aisama_pk3')->references('id')->on('users');
            $table->foreign('user_doc2_id', 'aisama_pk4')->references('id')->on('users');
            $table->foreign('user_crea_id', 'aisama_pk5')->references('id')->on('users');
            $table->foreign('user_edita_id', 'aisama_pk6')->references('id')->on('users');
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA DESCRIPCIÓN DE LA SALIA DE UN BENEFICIARIO DE LOS SERVICIOS DE UNA UPI'");

    }

    public function down()
    {

        Schema::dropIfExists($this->tablaxxx);
    }
}
