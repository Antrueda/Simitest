<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiJrFamiliarsTable extends Migration
{
    private $tablaxxx = 'h_fi_jr_familiars';
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
