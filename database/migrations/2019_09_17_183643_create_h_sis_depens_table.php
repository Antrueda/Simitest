<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisDepensTable extends Migration
{
    private $tablaxxx = 'h_sis_depens';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('nombre')->comment('CAMPO NOMBRE DE LA DEPENDENCIA');
            $table->integer('i_prm_cvital_id')->unsigned()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_tdependen_id')->unsigned()->comment('CAMPO TIPO DE DEPENDENCIA');
            $table->integer('i_prm_sexo_id')->unsigned()->comment('CAMPO DE SEXO');
            $table->string('s_direccion')->comment('CAMPO DE DIRECCION DE LA DEPENDENCIA');
            $table->integer('sis_departam_id')->unsigned()->comment('CAMPO DE ID DEL DEPARTAMENTO');
            $table->integer('sis_municipio_id')->unsigned()->comment('CAMPO DE ID DEL MUNICIPIO');
            $table->integer('sis_upzbarri_id')->unsigned()->comment('CAMPO ID DEL BARRIO ');
            $table->string('s_telefono')->comment('CAMPO TELEFONO DE DEPENDENCIA');
            $table->string('s_correo')->comment('CAMPO CORREO DE LA DEPENDENCIA');
            $table->Integer('itiestan')->nullable()->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->nullable()->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->nullable()->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->Integer('estusuario_id')->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->Integer('simianti_id')->nullable()->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
