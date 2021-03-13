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
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->timestamp('hora_retorno');
            $table->longText('descripcion')->nullable();
            $table->longText('observaciones')->nullable();
            $table->string('nombres_retorna', 120)->nullable();
            $table->integer('prm_doc_id')->unsigned()->nullable();
            $table->string('doc_retorna', 10)->nullable();
            $table->integer('prm_parentezco_id')->unsigned()->nullable();
            $table->integer('responsable')->unsigned();
            $table->integer('user_doc1_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_condicion_id')->unsigned();
            $table->integer('prm_orientado_id')->unsigned();
            $table->integer('prm_enfermerd_id')->unsigned();
            $table->integer('prm_brotes_id')->unsigned();
            $table->integer('prm_laceracio_id')->unsigned();
            $table->integer('ai_retorno_salida_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
