<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdViolenciasTable extends Migration
{
    private $tablaxxx = 'h_csd_violencias';
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
            $table->integer('prm_condicion_id')->unsigned()->comment('CAMPO ID SI PRESENTA CONDICION DE VIOLENCIA');
            $table->integer('departamento_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('municipio_cond_id')->unsigned()->nullable()->comment('CAMPO ID DE MUNICIPIO');
            $table->integer('prm_certificado_id')->unsigned()->nullable()->comment('CAMPO ID SI TIENE CERTIFICADO');
            $table->integer('departamento_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO DE CERTIFICADO');
            $table->integer('municipio_cert_id')->unsigned()->nullable()->comment('CAMPO ID DE DE MUNICIPIO DE CERTIFICADO');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
