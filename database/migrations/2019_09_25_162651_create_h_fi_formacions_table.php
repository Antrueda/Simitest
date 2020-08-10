<?php

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
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_lee_id')->unsigned();
            $table->bigInteger('i_prm_escribe_id')->unsigned();
            $table->bigInteger('i_prm_operaciones_id')->unsigned();
            $table->bigInteger('i_prm_estudia_id')->unsigned();
            $table->bigInteger('i_prm_jornada_estudio_id')->unsigned(); //->comment('FI 4.5 JORNADA DE ESTUDIO');
            $table->bigInteger('i_prm_naturaleza_entidad_id')->unsigned(); //->comment('FI 4.6 NATURALEZA DE LA ENTIDAD');
            $table->bigInteger('sis_institucion_edu_id')->unsigned(); //->comment('FI 4.7 NOMBRE DE LA INSTITUCIÓN'); // OTRA TABLA
            $table->bigInteger('i_dias_sin_estudio')->nullable()->unsigned(); //->comment('FI 4.8.1 DIAS SIN ESTUDIO');
            $table->bigInteger('i_meses_sin_estudio')->nullable()->unsigned(); //->comment('FI 4.8.2 MESES SIN ESTUDIO');
            $table->bigInteger('i_anos_sin_estudio')->nullable()->unsigned(); //->comment('FI 4.8.3 AÑOS SIN ESTUDIO');
            $table->bigInteger('i_prm_ultimo_nivel_estudio_id')->unsigned(); //->comment('FI 4.9 ÚLTIMO NIVEL DE ESTUDIO ALCANZADO');
            $table->bigInteger('i_prm_ultimo_grado_aprobado_id')->unsigned(); //->comment('FI 4.10 ÚLTIMO GRADO, MODULO, SEMESTRE APROBADO');
            $table->bigInteger('i_prm_certificado_ultimo_nivel_id')->unsigned(); //->comment('FI 4.11 CERTIFICADO ÚLTIMO NIVEL DE ESTUDIO');

            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA FORMACION');
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned(); //->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_formacion_id')->unsigned()->comment('REGISTRO FORMACIÓN AL QUE SE LE ASIGNA EL MOTIVO DE VINCULACIÓN');
            $table->bigIntegeR('i_prm_motivo_vinc_id')->unsigned()->comment('FI 4.12 MOTIVOS DESEA VINCULARSE AL IDIPRON');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps();
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