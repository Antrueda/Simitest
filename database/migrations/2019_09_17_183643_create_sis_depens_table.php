<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisDepensTable extends Migration
{
    private $tablaxxx = 'sis_depens';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->bigInteger('i_prm_cvital_id')->unsigned();
            $table->bigInteger('i_prm_tdependen_id')->unsigned();
            $table->bigInteger('sis_depen_id')->unsigned()->nullable();
            $table->bigInteger('i_prm_sexo_id')->unsigned();
            $table->string('s_direccion');
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('sis_upzbarri_id')->unsigned();
            $table->string('s_telefono');
            $table->string('s_correo');
            $table->Integer('itiestan')->default(0)->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->default(0)->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->default(0)->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->string('s_observacion',3000);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->timestamps();
            $table->foreign('i_prm_cvital_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tdependen_id')->references('id')->on('parametros');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('i_prm_sexo_id')->references('id')->on('parametros');
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('sis_upzbarri_id')->references('id')->on('sis_upzbarris');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS DEPENDENCIAS DEL IDIPRON CONTENIENDO LOS DATOS DE UBICACIÓN Y DE CONTACTO'");
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
