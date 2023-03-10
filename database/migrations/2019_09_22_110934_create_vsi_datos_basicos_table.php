<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVsiDatosBasicosTable extends Migration
{
    private $tablaxxx = 'vsis';
    private $tablaxxx2 = 'vsi_nnaj_familiar';
    private $tablaxxx3 = 'vsi_nnaj_social';
    private $tablaxxx4 = 'vsi_nnaj_academica';
    private $tablaxxx5 = 'vsi_nnaj_comportamental';
    private $tablaxxx6 = 'vsi_nnaj_sexual';
    private $tablaxxx7 = 'vsi_nnaj_emocional';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('sis_depen_id')->unsigned()->comment('CAMPO ID DEPENDENCIA');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');


            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE LOS NNAJ CON LAS DEPENDENCIAS REGISTRADAS EN EL SISTEMA'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ESTADO EMOCIONAL');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id'],'vsnnem_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx7}` comment 'TABLA QUE ALMACENA LAS OPCIONES DEL AREA EMOCIONAL DE LA PERSONA ENTREVISTADA, PREGUNTA 19.1 SECCION AREAS AJUSTES SICOSOCIAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO AREA SEXUAL');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id'],'vsnnase_un1');//
            $table = CamposMagicos::magicos($table);


        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LAS OPCIONES DEL AREA SEXUAL DE LA PERSONA ENTREVISTADA, PREGUNTA 19.2 SECCION AREAS AJUSTES SICOSOCIAL  DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO AREA COMPORTAMENTAL');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id'],'vsnnco_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LAS OPCIONES DEL AREA COMPORTAMENTAL DE LA PERSONA ENTREVISTADA, PREGUNTA 19.3 SECCION AREAS AJUSTES SICOSOCIAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO AREA ACADEMICA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id'],'vsnnac_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LAS OPCIONES DEL AREA ACADEMICA DE LA PERSONA ENTREVISTADA, PREGUNTA 19.4 SECCION AREAS AJUSTES SICOSOCIAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO AREA SOCIAL');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id'],'vsnnso_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LAS OPCIONES DEL AREA SOCIAL DE LA PERSONA ENTREVISTADA, PREGUNTA 19.5 SECCION AREAS AJUSTES SICOSOCIAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO AREA FAMILIAR');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->unique(['parametro_id', 'vsi_id'],'vsnnfa_un1');
            $table = CamposMagicos::magicos($table);


        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LAS OPCIONES DEL AREA FAMILIAR DE LA PERSONA ENTREVISTADA, PREGUNTA 19.6 SECCION AREAS AJUSTES SICOSOCIAL DE LA FICHA SICOSOCIAL'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx7);
        Schema::dropIfExists($this->tablaxxx);
    }
}
