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
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('departamento_id')->unsigned();
            $table->bigInteger('municipio_id')->unsigned();
            $table->date('fecha_diligenciamiento');
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->string('lugar_evasion', 120);
            $table->date('fecha_evasion');
            $table->time('hora_evasion');

            $table->Integer('nnaj_talla');
            $table->Integer('nnaj_peso');
            $table->bigInteger('prm_contextura_id')->unsigned();
            $table->bigInteger('prm_rostro_id')->unsigned();
            $table->bigInteger('prm_piel_id')->unsigned();
            $table->bigInteger('prm_colCabello_id')->unsigned();
            $table->bigInteger('prm_tinturado_id')->unsigned();
            $table->string('tintura', 120)->nullable();
            $table->bigInteger('prm_tipCabello_id')->unsigned();
            $table->bigInteger('prm_corCabello_id')->unsigned()->nullable();
            $table->bigInteger('prm_ojos_id')->unsigned();
            $table->bigInteger('prm_nariz_id')->unsigned();
            $table->bigInteger('prm_tienelunar_id')->unsigned();
            $table->Integer('cuantos')->nullable();
            $table->bigInteger('prm_tamlunar_id')->unsigned()->nullable();
            $table->longText('senias');
            $table->string('s_doc_adjunto', 200)->nullable();
            $table->longText('circunstancias');

            $table->longText('observaciones_fam');
            $table->bigInteger('prm_reporta_id')->unsigned();
            $table->bigInteger('prm_llamada_id')->unsigned()->nullable();
            $table->string('radicado', 120)->nullable();
            $table->string('recibe_denuncia', 120)->nullable();
            $table->bigInteger('user_doc1_id')->unsigned();
            $table->bigInteger('user_doc2_id')->unsigned();
            $table->bigInteger('responsable')->unsigned();
            $table->string('institución', 120)->nullable();
            $table->string('nombre_recibe', 120)->nullable();
            $table->string('cargo_recibe', 120)->nullable();
            $table->string('placa_recibe', 120)->nullable();
            $table->date('fecha_denuncia')->nullable();
            $table->time('hora_denuncia')->nullable();
            $table->bigInteger('prm_hor_denuncia_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id','aireva_pk1')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('sis_nnaj_id','aireva_pk2')->references('id')->on('sis_nnajs');
            $table->foreign('departamento_id','aireva_pk3')->references('id')->on('sis_departams');
            $table->foreign('municipio_id','aireva_pk4')->references('id')->on('sis_municipios');
            $table->foreign('prm_upi_id','aireva_pk5')->references('id')->on('sis_depens');
            $table->foreign('prm_contextura_id','aireva_pk6')->references('id')->on('parametros');
            $table->foreign('prm_rostro_id','aireva_pk7')->references('id')->on('parametros');
            $table->foreign('prm_piel_id','aireva_pk8')->references('id')->on('parametros');
            $table->foreign('prm_colCabello_id','aireva_pk9')->references('id')->on('parametros');
            $table->foreign('prm_tinturado_id','aireva_pk10')->references('id')->on('parametros');
            $table->foreign('prm_tipCabello_id','aireva_pk11')->references('id')->on('parametros');
            $table->foreign('prm_corCabello_id','aireva_pk12')->references('id')->on('parametros');
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
