<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAiRetornoSalidasTable extends Migration
{
    private $tablaxxx = 'h_ai_retosalis';
    private $tablaxxx2 = 'h_ai_retsalcos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO ID UPI O DEPENDECIA');
            $table->date('fecha')->comment('CAMPO FECHA DE DILIGENCIAMIENTO');
            $table->timestamp('hora_retorno')->comment('CAMPO HORA DE RETORNO');
            $table->longText('descripcion')->nullable()->comment('CAMPO DE TEXTO DESCRIPCION');
            $table->longText('observaciones')->nullable()->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->string('nombres_retorna', 120)->nullable()->comment('CAMPO DE TEXTO NOMBRE');
            $table->integer('prm_doc_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DOCUMENTO');
            $table->string('doc_retorna', 12)->nullable()->comment('CAMPO NUMERO DE DOCUMENTO');
            $table->integer('prm_parentezco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO PARENTESCO');
            $table->integer('responsable')->unsigned()->comment('CAMPO RESPONSABLE DE LA UPI O DEPENDENCIA');
            $table->integer('user_doc1_id')->unsigned()->comment('CAMPO ID DE PERSONA QUE DILIGENCIA');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_condicion_id')->unsigned()->comment('PARAMETRO CONDICION');
            $table->integer('prm_orientado_id')->unsigned()->comment('PARAMETRO ORIENTADO');
            $table->integer('prm_enfermerd_id')->unsigned()->comment('PARAMETRO ENFERMO');
            $table->integer('prm_brotes_id')->unsigned()->comment('PARAMETRO BROTES');
            $table->integer('prm_laceracio_id')->unsigned()->comment('PARAMETRO LACERACIONES');
            $table->integer('ai_retorno_salida_id')->unsigned()->comment('ID RETORNO DE SALIDA');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
