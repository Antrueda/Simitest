<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdAlimentacionTable extends Migration
{
    private $tablaxxx = 'csd_alimentacions';
    private $tablaxxx2 = 'csd_aliment_frec';
    private $tablaxxx3 = 'csd_aliment_compra';
    private $tablaxxx4 = 'csd_aliment_inge';
    private $tablaxxx5 = 'csd_aliment_prepara';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('cant_personas')->unsigned()->comment('CAMPO CANTIDAD DE PERSONA');
            $table = CamposMagicos::getForeign($table, 'csd');
            $table = CamposMagicos::getForeign($table, 'prm_horario_id','parametros');
            $table = CamposMagicos::getForeign($table, 'prm_apoyo_id','parametros');
            $table->integer('prm_entidad_id')->unsigned()->nullable()->comment('CAMPO ENTIDAD');
            $table->foreign('prm_entidad_id')->references('id')->on('parametros');
            $table = CamposMagicos::getForeign($table, 'prm_tipofuen_id','parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA ALIMENTACION DE LA FAMILIA A LA QUE PERTENECE EL ENTREVISTADO, SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO COMPRA DE ALIMENTOS');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE VECES QUE LA FAMILIA COMPRA ALIMENTOS, PREGUNTA 9.2 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO SITIO DONDE COMPRA DE ALIMENTOS');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE SITIOS DONDE ES REALIZADA LA COMPRA DE ALIMENTOS, PREGUNTA 9.3 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO CANTIDAD DE COMIDAS AL DIA');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE COMIDAS CONSUMIDAS EN EL DIA, PREGUNTA 9.4 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO PERSONAS QUE PREPARAN LOS ALIMENTOS');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table = CamposMagicos::magicos($table);
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE PERSONAS QUE REALIZAN LA PREPARACION DE ALIMENTOS, PREGUNTA 9.6 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
