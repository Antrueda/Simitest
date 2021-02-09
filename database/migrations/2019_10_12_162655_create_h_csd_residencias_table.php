<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdResidenciasTable extends Migration
{
    private $tablaxxx = 'h_csd_residencias';
    private $tablaxxx2 = 'h_csd_reside_ambiente';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->integer('prm_tipo_id')->unsigned();
            $table->integer('prm_es_id')->unsigned();
            $table->integer('prm_dir_tipo_id')->unsigned();
            $table->integer('prm_dir_zona_id')->unsigned();
            $table->integer('prm_dir_via_id')->unsigned()->nullable();
            $table->string('dir_nombre')->nullable();
            $table->integer('prm_dir_alfavp_id')->unsigned()->nullable();
            $table->integer('prm_dir_bis_id')->unsigned()->nullable();
            $table->integer('prm_dir_alfabis_id')->unsigned()->nullable();
            $table->integer('prm_dir_cuadrantevp_id')->unsigned()->nullable();
            $table->integer('dir_generadora')->nullable();
            $table->integer('prm_dir_alfavg_id')->unsigned()->nullable();
            $table->integer('dir_placa')->nullable();
            $table->integer('prm_dir_cuadrantevg_id')->unsigned()->nullable();
            $table->integer('prm_estrato_id')->unsigned()->nullable();
            $table->string('dir_complemento', 300)->nullable();
            $table->integer('sis_upzbarri_id')->unsigned()->nullable();
            $table->string('telefono_uno', 10)->nullable();
            $table->string('telefono_dos', 10)->nullable();
            $table->string('telefono_tres', 10)->nullable();
            $table->string('email')->nullable();
            $table->integer('prm_piso_id')->unsigned();
            $table->integer('prm_muro_id')->unsigned();
            $table->integer('prm_higiene_id')->unsigned();
            $table->integer('prm_ventilacion_id')->unsigned();
            $table->integer('prm_iluminacion_id')->unsigned();
            $table->integer('prm_orden_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_residencia_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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
