<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAiReporteEvasionsTable extends Migration
{
    private $tablaxxx = 'h_ai_reporte_evasions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('departamento_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->date('fecha_diligenciamiento');
            $table->integer('prm_upi_id')->unsigned();
            $table->string('lugar_evasion', 120);
            $table->date('fecha_evasion');
            $table->time('hora_evasion');
            $table->Integer('nnaj_talla');
            $table->Integer('nnaj_peso');
            $table->string('s_doc_adjunto', 200)->nullable();
            $table->integer('prm_contextura_id')->unsigned();
            $table->integer('prm_rostro_id')->unsigned();
            $table->integer('prm_piel_id')->unsigned();
            $table->integer('prm_colCabello_id')->unsigned();
            $table->integer('prm_tinturado_id')->unsigned();
            $table->string('tintura', 120)->nullable();
            $table->integer('prm_tipCabello_id')->unsigned();
            $table->integer('prm_corCabello_id')->unsigned()->nullable();
            $table->integer('prm_ojos_id')->unsigned();
            $table->integer('prm_nariz_id')->unsigned();
            $table->integer('prm_tienelunar_id')->unsigned();
            $table->Integer('cuantos')->nullable();
            $table->integer('prm_tamlunar_id')->unsigned()->nullable();
            $table->longText('senias');
            $table->longText('circunstancias');
            $table->longText('observaciones_fam');
            $table->integer('prm_reporta_id')->unsigned();
            $table->integer('prm_llamada_id')->unsigned()->nullable();
            $table->string('radicado', 120)->nullable();
            $table->string('recibe_denuncia', 120)->nullable();
            $table->integer('user_doc1_id')->unsigned();
            $table->integer('user_doc2_id')->unsigned();
            $table->integer('responsable')->unsigned();
            $table->string('institución', 120)->nullable();
            $table->string('nombre_recibe', 120)->nullable();
            $table->string('cargo_recibe', 120)->nullable();
            $table->string('placa_recibe', 120)->nullable();
            $table->date('fecha_denuncia')->nullable();
            $table->time('hora_denuncia')->nullable();
            $table->integer('prm_hor_denuncia_id')->unsigned()->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
