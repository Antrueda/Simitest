<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAiReporteEvasionTable extends Migration
{
    private $tablaxxx = 'ai_reporte_evasions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('departamento_id')->unsigned()->comment('CAMPO ID DEPARTAMENTO');
            $table->integer('municipio_id')->unsigned()->comment('CAMPO ID MUNICIPIO');
            $table->date('fecha_diligenciamiento')->comment('CAMPO FECHA DE DILIGENCIAMIENTO');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('lugar_evasion', 120)->comment('CAMPO LUGAR DE EVASION');
            $table->date('fecha_evasion')->comment('CAMPO FECHA DE EVASION');
            $table->timestamp('hora_evasion')->comment('CAMPO HORA DE EVASION');
            $table->Integer('nnaj_talla')->comment('CAMPO PARAMETRO TALLA DE ROPA');
            $table->Integer('nnaj_peso')->comment('CAMPO PARAMETRO PESO');
            $table->integer('prm_contextura_id')->unsigned()->comment('CAMPO PARAMETRO CONTEXTURA');
            $table->integer('prm_rostro_id')->unsigned()->comment('CAMPO PARAMETROROSTRO');
            $table->integer('prm_piel_id')->unsigned()->comment('CAMPO PARAMETRO TALLA DE ROPA');
            $table->integer('prm_colcabello_id')->unsigned()->comment('CAMPO PARAMETRO COLOR DE CABELLO');
            $table->integer('prm_tinturado_id')->unsigned()->comment('CAMPO PARAMETRO TINTURADO');
            $table->string('tintura', 120)->nullable()->comment('CAMPO TINTA');
            $table->integer('prm_tipcabello_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE CABELLO');
            $table->integer('prm_corcabello_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO CORTE DE CABELLO');
            $table->integer('prm_ojos_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE OJOS');
            $table->integer('prm_nariz_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE NARIZ');
            $table->integer('prm_tienelunar_id')->unsigned()->comment('CAMPO PARAMETRO TIENE LUNAR');
            $table->Integer('cuantos')->nullable()->comment('CAMPO CUANTO LUNARES');
            $table->integer('prm_tamlunar_id')->unsigned()->nullable()->comment('CAMPO TAMAÑO DE LUNARES');
            $table->string('senias')->comment('CAMPO SEÑAS PARTICULARES');
            $table->string('s_doc_adjunto', 200)->nullable()->comment('CAMPO SEÑAS PARTICULARES');
            $table->string('circunstancias')->comment('CAMPO DE TEXTO CIRCUNSTANCIAS');
            $table->string('observaciones_fam')->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->integer('prm_reporta_id')->unsigned()->comment('CAMPO PARAMETRO REPORTA');
            $table->integer('prm_llamada_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO REALIZA LLAMADA');
            $table->string('radicado', 120)->nullable()->comment('CAMPO RADICADO');
            $table->string('recibe_denuncia', 120)->nullable()->comment('CAMPO QUIEN RECIBE');
            $table->integer('user_doc1_id')->unsigned()->comment('CAMPO PERSONA QUE EVIDENCIO LA EVASION');
            $table->integer('user_doc2_id')->unsigned()->comment('CAMPO PERSONA QUE DILIGENCIO LA EVASION');
            $table->integer('responsable')->unsigned()->comment('CAMPO RESPONSABLE DE LA UPI');
            $table->string('institucion', 120)->nullable()->comment('CAMPO INSTITUCION');
            $table->string('nombre_recibe', 120)->nullable()->comment('CAMPO NOMBRE DE QUIEN RECIBE');
            $table->string('cargo_recibe', 120)->nullable()->comment('CAMPO CARGO DE QUIEN RECIBE');
            $table->string('placa_recibe', 120)->nullable()->comment('CAMPO PLACA DE QUIEN RECIBE');
            $table->date('fecha_denuncia')->nullable()->comment('CAMPO FECHA DE DENUNCIA');
            $table->timestamp('hora_denuncia')->nullable()->comment('CAMPO HORA DE DENUNCIA');
            $table->integer('prm_hor_denuncia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO HORA DE DENUNCIA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id','aireva_pk1')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('sis_nnaj_id','aireva_pk2')->references('id')->on('sis_nnajs');
            $table->foreign('departamento_id','aireva_pk3')->references('id')->on('sis_departams');
            $table->foreign('municipio_id','aireva_pk4')->references('id')->on('sis_municipios');
            $table->foreign('prm_upi_id','aireva_pk5')->references('id')->on('sis_depens');
            $table->foreign('prm_contextura_id','aireva_pk6')->references('id')->on('parametros');
            $table->foreign('prm_rostro_id','aireva_pk7')->references('id')->on('parametros');
            $table->foreign('prm_piel_id','aireva_pk8')->references('id')->on('parametros');
            $table->foreign('prm_colcabello_id','aireva_pk9')->references('id')->on('parametros');
            $table->foreign('prm_tinturado_id','aireva_pk10')->references('id')->on('parametros');
            $table->foreign('prm_tipcabello_id','aireva_pk11')->references('id')->on('parametros');
            $table->foreign('prm_corcabello_id','aireva_pk12')->references('id')->on('parametros');
            $table->foreign('prm_ojos_id','aireva_pk13')->references('id')->on('parametros');
            $table->foreign('prm_nariz_id','aireva_pk14')->references('id')->on('parametros');
            $table->foreign('prm_tienelunar_id','aireva_pk15')->references('id')->on('parametros');
            $table->foreign('prm_tamlunar_id','aireva_pk16')->references('id')->on('parametros');

            $table->foreign('prm_reporta_id','aireva_pk17')->references('id')->on('parametros');
            $table->foreign('prm_llamada_id','aireva_pk18')->references('id')->on('parametros');
            $table->foreign('user_doc1_id','aireva_pk19')->references('id')->on('users');
            $table->foreign('user_doc2_id','aireva_pk20')->references('id')->on('users');
            $table->foreign('responsable','aireva_pk21')->references('id')->on('users');
            $table->foreign('prm_hor_denuncia_id','aireva_pk22')->references('id')->on('parametros');
            $table->foreign('user_crea_id','aireva_pk23')->references('id')->on('users');
            $table->foreign('user_edita_id','aireva_pk24')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DEL ESCAPE DE UN BENEFICIARIO DEL IDIPRIN DE UNA UPI, ACCIONES INDIVIDUALES'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
