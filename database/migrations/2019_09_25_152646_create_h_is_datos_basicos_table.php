<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHIsDatosBasicosTable extends Migration
{
    private $tablaxxx = 'h_is_datos_basicos';

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
            $table->integer('sis_depen_id')->unsigned();
            $table->date('d_fecha_diligencia');
            $table->integer('i_prm_tipo_atencion_id')->unsigned();
            $table->integer('i_prm_area_ajuste_id')->unsigned();
            $table->integer('i_prm_subarea_ajuste_id')->unsigned();
            $table->string('s_tema');
            $table->string('s_objetivo_sesion');
            $table->string('s_desarrollo_sesion');
            $table->text('s_conclusiones_sesion');
            $table->string('s_tareas')->nullable();
            $table->integer('i_prm_subarea_emocional_id')->nullable()->unsigned();
            $table->integer('i_prm_avance_emocional_id')->nullable()->unsigned();
            $table->integer('i_prm_subarea_familiar_id')->nullable()->unsigned();
            $table->integer('i_prm_avance_familiar_id')->nullable()->unsigned();
            $table->integer('i_prm_subarea_sexual_id')->nullable()->unsigned();
            $table->integer('i_prm_avance_sexual_id')->nullable()->unsigned();
            $table->integer('i_prm_subarea_compor_id')->nullable()->unsigned();
            $table->integer('i_prm_avance_compor_id')->nullable()->unsigned();
            $table->integer('i_prm_subarea_social_id')->nullable()->unsigned();
            $table->integer('i_prm_avance_social_id')->nullable()->unsigned();
            $table->integer('i_prm_subarea_academ_id')->nullable()->unsigned();
            $table->integer('i_prm_avance_academ_id')->nullable()->unsigned();
            $table->integer('i_prm_area_emocional_id')->nullable()->unsigned();
            $table->integer('i_prm_area_sexual_id')->nullable()->unsigned();
            $table->integer('i_prm_area_comportam_id')->nullable()->unsigned();
            $table->integer('i_prm_area_academica_id')->nullable()->unsigned();
            $table->integer('i_prm_area_social_id')->nullable()->unsigned();
            $table->integer('i_prm_area_familiar_id')->nullable()->unsigned();
            $table->integer('i_prm_area_proxima_id')->unsigned()->nullable();
            $table->string('s_observaciones')->nullable();
            $table->date('d_fecha_proxima')->nullable();
            $table->integer('i_primer_responsable')->unsigned();
            $table->integer('i_segundo_responsable')->nullable()->unsigned();
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
