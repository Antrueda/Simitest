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
            $table->bigIncrements('id');
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
            $table->string('s_doc_adjunto', 200)->nullable();
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
            $table->string('senias', 4000);
            $table->string('circunstancias', 4000);
            $table->string('observaciones_fam', 4000);
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