<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiJrFamiliarsTable extends Migration
{
    private $tablaxxx = 'fi_jr_familiars';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->String('s_proceso')->comment('NOMBRE DEL PROCESO');
            $table->integer('i_tiempo')->comment('TIEMPO DEL PROCESO');
            $table->integer('i_veces')->comment('CAMPO NUMERO DE VECES');
            $table->integer('fi_compfami_id')->unsigned()->comment('CAMPO ID FAMILIAR');
            $table->integer('i_prm_vigente_id')->unsigned()->comment('CAMPO PARAMETRO VIGENTE');
            $table->integer('i_prm_motivo_id')->unsigned()->comment('CAMPO MOTIVO');
            $table->integer('i_prm_tiempo_id')->unsigned()->comment('CAMPO PARAMETRO TIEMPO');
            $table->integer('fi_justrest_id')->unsigned()->comment('CAMPO ID JUSTICIA');
            $table->foreign('fi_justrest_id')->references('id')->on('fi_justrests');
            $table->foreign('i_prm_vigente_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tiempo_id')->references('id')->on('parametros');
            $table->foreign('fi_compfami_id')->references('id')->on('fi_compfamis');
            $table->unique(['fi_compfami_id','fi_justrest_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LOS FAMILIARES QUE TIENEN PROBLEMAS JUDICIALES'");
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
