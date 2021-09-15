<?php

use App\CamposMagicos\CamposMagicos;
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
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('nombre')->unique()->comment('CAMPO NOMBRE DE LA DEPENDENCIA');
            $table->integer('i_prm_cvital_id')->unsigned()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_tdependen_id')->unsigned()->comment('CAMPO TIPO DE DEPENDENCIA');
            $table->integer('i_prm_sexo_id')->unsigned()->comment('CAMPO DE SEXO');
            $table->string('s_direccion')->comment('CAMPO DE DIRECCION DE LA DEPENDENCIA');
            $table->integer('sis_departam_id')->unsigned()->comment('CAMPO DE ID DEL DEPARTAMENTO');
            $table->integer('sis_municipio_id')->unsigned()->comment('CAMPO DE ID DEL MUNICIPIO');
            $table->integer('sis_upzbarri_id')->unsigned()->comment('CAMPO ID DEL BARRIO ');
            $table->string('s_telefono')->comment('CAMPO TELEFONO DE DEPENDENCIA');
            $table->string('s_correo')->comment('CAMPO CORREO DE LA DEPENDENCIA');
            $table->Integer('itiestan')->default(0)->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->default(0)->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->default(0)->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->integer('estusuario_id')->unsigned()->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->Integer('simianti_id')->nullable()->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');


            $table->foreign('i_prm_cvital_id','depe_fk1')->references('id')->on('parametros');
            $table->foreign('i_prm_tdependen_id','depe_fk2')->references('id')->on('parametros');
            $table->foreign('estusuario_id','depe_fk3')->references('id')->on('estusuarios');

            $table->foreign('i_prm_sexo_id','depe_fk4')->references('id')->on('parametros');
            $table->foreign('sis_departam_id','depe_fk5')->references('id')->on('sis_departams');
            $table->foreign('sis_municipio_id','depe_fk6')->references('id')->on('sis_municipios');
            $table->foreign('sis_upzbarri_id','depe_fk7')->references('id')->on('sis_upzbarris');
            $table = CamposMagicos::magicos($table);
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
