<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCsdResidenciasTable extends Migration
{
    private $tablaxxx = 'csd_residencias';
    private $tablaxxx2 ='csd_reside_ambiente';
    private $tablaxxx3 = 'csd_resservis';
    private $tablaxxx4 = 'csd_reshogars';
    private $tablaxxx5 = 'csd_rescamass';
    private $tablaxxx6 = 'csd_resobsers';
    private $tablaxxx7 = 'csd_rescomparte';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
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
            $table->integer('prm_tipofuen_id')->unsigned()->comment('CAMPO TIPO DE FUENTE');
            $table->integer('numerocamas')->nullable()->comment('CAMPO NUMERO DE CAMAS');
            $table->integer('prm_hacinam_id')->nullable()->unsigned()->comment('CAMPO HACINAMIENTO');
            $table->foreign('prm_hacinam_id')->references('id')->on('parametros');
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
            $table->foreign('prm_dir_alfavg_id','csdres_pk1')->references('id')->on('parametros');
            $table->foreign('prm_dir_cuadrantevg_id','csdres_pk2')->references('id')->on('parametros');
            $table->foreign('prm_estrato_id','csdres_pk3')->references('id')->on('parametros');
            $table->foreign('sis_upzbarri_id','csdres_pk4')->references('id')->on('sis_upzbarris');
            $table->foreign('prm_piso_id','csdres_pk5')->references('id')->on('parametros');
            $table->foreign('prm_muro_id','csdres_pk6')->references('id')->on('parametros');
            $table->foreign('prm_higiene_id','csdres_pk7')->references('id')->on('parametros');
            $table->foreign('prm_ventilacion_id','csdres_pk8')->references('id')->on('parametros');
            $table->foreign('prm_iluminacion_id','csdres_pk9')->references('id')->on('parametros');
            $table->foreign('prm_orden_id','csdres_pk10')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA UBICACION Y CONTACTO DE LA PERSONA ENTREVISTADA, SECCION 5 DE LA CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO AMBIENTE');
            $table->integer('csd_residencia_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table->unique(['parametro_id', 'csd_residencia_id'],'creamb_pk1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE CONDICIONES AMBIENTALES Y DE SALUBRIDAD DE LA VIVIENDA DE LA PERSONA ENTREVISTADA, PREGUNTA 5.17 SECCION 5 DE LA CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('prm_servicio_id')->unsigned()->comment('CAMPO PARAMETRO DE TIPO DE SERVICIO');
            $table->integer('prm_legalxxx_id')->unsigned()->comment('CAMPO PARAMETRO SI ES LEGAL');
            $table->integer('csd_residencia_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->foreign('prm_servicio_id')->references('id')->on('parametros');
            $table->foreign('prm_legalxxx_id')->references('id')->on('parametros');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE SERVICIOS Y ESTADO, PREGUNTA 5.18 SECCION 5 DE LA CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('prm_espacio_id')->unsigned()->comment('CAMPO TIPO DE ESPACIO O AMBIENTE');
            $table->integer('espaciocant')->nullable()->comment('CAMPO CANTIDAD DE ESPACIO O AMBIENTE');
            $table->integer('csd_residencia_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->foreign('prm_espacio_id')->references('id')->on('parametros');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE ESPACIOS QUE DISPONE EL HOGAR, PREGUNTA 5.19'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('prm_comparte_id')->unsigned()->comment('CAMPO PARAMETRO SI COMPARTE CAMAS');
            $table->integer('csd_residencia_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->foreign('prm_comparte_id')->references('id')->on('parametros');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA SI COMPARTE CAMAS '");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('csd_residencia_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->string('observaciones',4000)->nullable()->comment('CAMPO OBSERVACIONES');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LAS OBSERVACIONES REALIZADAS POR EL FUNCIONARIO A LA RESIDENCIA'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('prm_espacio_id')->unsigned()->comment('CAMPO ESPACIO');
            $table->integer('prm_otrafamilia_id')->unsigned()->comment('CAMPO SI COMPARTE EL ESPACIO');
            $table->integer('csd_residencia_id')->unsigned()->comment('CAMPO ID DE CSD RESIDENCIA');
            $table->foreign('prm_espacio_id')->references('id')->on('parametros');
            $table->foreign('prm_otrafamilia_id')->references('id')->on('parametros');
            $table->foreign('csd_residencia_id')->references('id')->on('csd_residencias');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx7}` comment 'TABLA QUE ALMACENA EL SI COMPARTE LOS ESPACIO CON OTRA FAMILIA, PREGUNTA 5.20 SECCION 5 DE LA CONSULTA SOCIAL EN DOMICILIO'");

    }





    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx7);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}


