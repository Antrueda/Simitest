<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInLineabaseNnajsTable extends Migration
{
    private $tablaxxx = 'in_lineabase_nnajs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            // $table->integer('in_fuente_id')->unsigned()->comment('ID DE FUENTE');
            $table->integer('i_prm_categoria_id')->unsigned()->default(246)->comment('ID PARAMETRO CATEGORIA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DE NNAJ');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('i_prm_categoria_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            // $table->foreign('in_fuente_id')->references('id')->on('in_fuentes');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            // $table->integer('in_fuente_id')->unsigned()->comment('ID DE FUENTE');
            $table->integer('i_prm_categoria_id')->unsigned()->default(246)->comment('ID PARAMETRO CATEGORIA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DE NNAJ');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA CLASIFICACION DE LA LINEA DE BASE DE LOS NNAJ BENEFICIARIOS DEL IDIPRON'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
