<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAiRetornoSalidasTable extends Migration
{
    private $tablaxxx = 'h_ai_retorno_salidas';
    private $tablaxxx2 = 'h_ai_retorno_salidas_condicion';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->time('hora_retorno');
            $table->bigInteger('prm_hor_ret_id')->unsigned();
            $table->string('descripcion', 4000);
            $table->string('observaciones', 4000);
            $table->string('nombres_retorna', 120)->nullable();
            $table->bigInteger('prm_doc_id')->unsigned()->nullable();
            $table->string('doc_retorna', 10)->nullable();
            $table->bigInteger('prm_parentezco_id')->unsigned()->nullable();
            $table->bigInteger('responsable')->unsigned();
            $table->bigInteger('user_doc1_id')->unsigned();
/*             $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps(); */
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('retorno_id')->unsigned();
            $table->bigInteger('valor_id')->unsigned();
/*             $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned(); */
            $table->unique(['parametro_id', 'retorno_id']);
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