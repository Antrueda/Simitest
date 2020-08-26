<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCsdResidenciasTable extends Migration
{
    private $tablaxxx = 'csd_residencias';
    private $tablaxxx2 = 'csd_reside_ambiente';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->bigInteger('prm_tipo_id')->unsigned();
            $table->bigInteger('prm_es_id')->unsigned();
            $table->bigInteger('prm_dir_tipo_id')->unsigned();
            $table->bigInteger('prm_dir_zona_id')->unsigned();
            $table->bigInteger('prm_dir_via_id')->unsigned()->nullable();
            $table->string('dir_nombre')->nullable();
            $table->bigInteger('prm_dir_alfavp_id')->unsigned()->nullable();
            $table->bigInteger('prm_dir_bis_id')->unsigned()->nullable();
            $table->bigInteger('prm_dir_alfabis_id')->unsigned()->nullable();
            $table->bigInteger('prm_dir_cuadrantevp_id')->unsigned()->nullable();
            $table->integer('dir_generadora')->nullable();
            $table->bigInteger('prm_dir_alfavg_id')->unsigned()->nullable();
            $table->integer('dir_placa')->nullable();
            $table->bigInteger('prm_dir_cuadrantevg_id')->unsigned()->nullable();
            $table->bigInteger('prm_estrato_id')->unsigned()->nullable();
            $table->string('dir_complemento', 300)->nullable();
            $table->bigInteger('sis_upzbarri_id')->unsigned()->nullable();
            $table->string('telefono_uno', 10)->nullable();
            $table->string('telefono_dos', 10);
            $table->string('telefono_tres', 10)->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('prm_piso_id')->unsigned();
            $table->bigInteger('prm_muro_id')->unsigned();
            $table->bigInteger('prm_higiene_id')->unsigned();
            $table->bigInteger('prm_ventilacion_id')->unsigned();
            $table->bigInteger('prm_iluminacion_id')->unsigned();
            $table->bigInteger('prm_orden_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');


            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            $table->foreign('prm_es_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_tipo_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_zona_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_via_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_alfavp_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_bis_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_alfabis_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_cuadrantevp_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_alfavg_id')->references('id')->on('parametros');
            $table->foreign('prm_dir_cuadrantevg_id')->references('id')->on('parametros');
            $table->foreign('prm_estrato_id')->references('id')->on('parametros');
            $table->foreign('sis_upzbarri_id')->references('id')->on('sis_upzbarris');
            $table->foreign('prm_piso_id')->references('id')->on('parametros');
            $table->foreign('prm_muro_id')->references('id')->on('parametros');
            $table->foreign('prm_higiene_id')->references('id')->on('parametros');
            $table->foreign('prm_ventilacion_id')->references('id')->on('parametros');
            $table->foreign('prm_iluminacion_id')->references('id')->on('parametros');
            $table->foreign('prm_orden_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA UBICACION Y CONTACTO DE LA PERSONA ENTREVISTADA, SECCION 5 DE LA CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_residencia_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table->unique(['parametro_id', 'csd_residencia_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE CONDICIONES AMBIENTALES Y DE SALUBRIDAD DE LA VIVIENDA DE LA PERSONA ENTREVISTADA, PREGUNTA 5.17 SECCION 5 DE LA CONSULTA SOCIAL EN DOMICILIO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
