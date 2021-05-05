<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiFormacionsTable extends Migration
{
    private $tablaxxx = 'h_fi_formacions';
    private $tablaxxx2 = 'h_fi_motivo_vinculacions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('i_prm_lee_id')->unsigned()->comment('CAMPO PARAMETRO SABE LEER');
            $table->integer('i_prm_escribe_id')->unsigned()->comment('CAMPO PARAMETRO SABE ESCRIBIR');
            $table->integer('prm_operacio_id')->unsigned()->comment('CAMPO PARAMETRO SABE OPERACIONES');
            $table->integer('i_prm_estudia_id')->unsigned()->comment('CAMPO PARAMETRO ESTA ESTUDIANDO');
            $table->integer('prm_jornestu_id')->unsigned()->comment('FI 4.5 JORNADA DE ESTUDIO');
            $table->integer('prm_natuenti_id')->unsigned()->comment('FI 4.6 NATURALEZA DE LA ENTIDAD');
            $table->string('s_institucion_edu')->nullable()->comment('FI 4.7 NOMBRE DE LA INSTITUCIÓN');
            //$table->integer('sis_institucion_edu_id')->unsigned()->comment('FI 4.7 NOMBRE DE LA INSTITUCIÓN') OTRA TABLA
            $table->integer('diasines')->nullable()->unsigned()->comment('FI 4.8.1 DIAS SIN ESTUDIO');
            $table->integer('mesinest')->nullable()->unsigned()->comment('FI 4.8.2 MESES SIN ESTUDIO');
            $table->integer('anosines')->nullable()->unsigned()->comment('FI 4.8.3 AÑOS SIN ESTUDIO');
            $table->integer('prm_ultniest_id')->unsigned()->comment('FI 4.9 ÚLTIMO NIVEL DE ESTUDIO ALCANZADO');
            $table->integer('prm_ultgrapr_id')->unsigned()->comment('FI 4.10 ÚLTIMO GRADO, MODULO, SEMESTRE APROBADO');
            $table->integer('prm_cerulniv_id')->unsigned()->comment('FI 4.11 CERTIFICADO ÚLTIMO NIVEL DE ESTUDIO');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA FORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_formacion_id')->unsigned()->comment('REGISTRO FORMACIÓN AL QUE SE LE ASIGNA EL MOTIVO DE VINCULACIÓN');
            $table->integer('prm_motivinc_id')->unsigned()->comment('FI 4.12 MOTIVOS DESEA VINCULARSE AL IDIPRON');
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