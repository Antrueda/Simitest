<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiConsentimientosTable extends Migration
{
    private $tablaxxx = 'vsi_consentimientos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->bigInteger('user_doc1_id')->unsigned()->comment('CAMPO PRIMER RESPONSABLE');
            $table->string('cargo1')->comment('CAMPO CARGO DEL PRIMER RESPONSABLE');
            $table->bigInteger('user_doc2_id')->unsigned()->comment('CAMPO SEGUNDO RESPONSABLE O RESPONSABLE DE LA UPI');
            $table->string('cargo2')->comment('CAMPO DEL RESPONSABLE DE LA UPI');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('user_doc1_id')->references('id')->on('users');
            // $table->foreign('user_doc2_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA QUIENES FIRMAN EL CONSENTIMIENTO DE TRATAMIENTO DE LOS DATOS, PREGUNTAS 22.1 Y 22.2 SECCION 22 CONSENTIMIENTO INFORMADO DE LA FICHA SICOSOCIAL'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
