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
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->integer('prm_tipo_id')->unsigned()->comment('CAMPO TIPO DE RESIDENCIA');
            $table->integer('prm_es_id')->unsigned()->comment('CAMPO LA RESIDENCIA ES');
            $table->integer('prm_dir_tipo_id')->unsigned()->comment('CAMPO TIPO DE DIRECCION');
            $table->integer('prm_dir_zona_id')->unsigned()->comment('CAMPO TIPO DE ZONA');
            $table->integer('prm_dir_via_id')->unsigned()->nullable()->comment('CAMPO TIPO DE VIA PRINCIPAL');
            $table->string('dir_nombre')->nullable()->comment('CAMPO NOMBRE DE LA VIA');
            $table->integer('prm_dir_alfavp_id')->unsigned()->nullable()->comment('ALDABETICO VIA PRINCIPAL');
            $table->integer('prm_dir_bis_id')->unsigned()->nullable()->comment('CAMPO BIS');
            $table->integer('prm_dir_alfabis_id')->unsigned()->nullable()->comment('LETRA BIS');
            $table->integer('prm_dir_cuadrantevp_id')->unsigned()->nullable()->comment('CUADRANTE VIA PRINCIPAL');
            $table->integer('dir_generadora')->nullable()->comment('CAMPO NUMERO VIA GENERADORA');
            $table->integer('prm_dir_alfavg_id')->unsigned()->nullable()->comment('ALDABETICO VIA GENERADORA');
            $table->integer('dir_placa')->nullable()->comment('CAMPO PLACA');
            $table->integer('prm_dir_cuadrantevg_id')->unsigned()->nullable()->comment('CAMPO CUADRANTE VIA GENERADORA');
            $table->integer('prm_estrato_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ESTRATO');
            $table->string('dir_complemento', 300)->nullable()->comment('CAMPO COMPLEMENTO');
            $table->integer('sis_upzbarri_id')->unsigned()->nullable()->comment('CAMPO ID BARRIO');
            $table->string('telefono_uno', 13)->nullable()->comment('CAMPO TELEFONO UNO');
            $table->string('telefono_dos', 13)->nullable()->comment('CAMPO TELEFONO DOS');
            $table->string('telefono_tres', 13)->nullable()->comment('CAMPO TELEFONO TRES');
            $table->string('email')->nullable()->comment('CAMPO CORREO ELECTRONICO');
            $table->integer('prm_piso_id')->unsigned()->comment('CAMPO TIPO DE PISO');
            $table->integer('prm_muro_id')->unsigned()->comment('CAMPO TIPO DE MURO');
            $table->integer('prm_higiene_id')->unsigned()->comment('CAMPO TIPO DE HIGIENE');
            $table->integer('prm_ventilacion_id')->unsigned()->comment('CAMPO TIPO DE VENTILACION');
            $table->integer('prm_iluminacion_id')->unsigned()->comment('CAMPO TIPO DE ILUMINACION');
            $table->integer('prm_orden_id')->unsigned()->comment('CAMPO TIPO DE ORDEN');
            $table->integer('numerocamas')->nullable()->comment('CAMPO NUMERO DE CAMAS');
            $table->integer('prm_hacinam_id')->nullable()->unsigned()->comment('CAMPO HACINAMIENTO');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO AMBIENTE');
            $table->integer('csd_residencia_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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
