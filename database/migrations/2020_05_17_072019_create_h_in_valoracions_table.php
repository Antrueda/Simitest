<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHInValoracionsTable extends Migration
{
    private $tablaxxx = 'h_in_valoracions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_lineabase_nnaj_id')->unsigned()->comment('LLAVE FORANEA TABLA in_lineabase_nnajs');
            $table->integer('i_prm_categoria_id')->unsigned()->comment('CAMPO PARAMETROS TIPO DE CATEGORIA');
            $table->integer('i_prm_cactual_id')->unsigned()->comment('CAMPO PARAMETROS ACTUAL');
            $table->integer('i_prm_avance_id')->unsigned()->comment('CAMPO PARAMETROS AVANCE');
            $table->integer('i_prm_nivel_id')->unsigned()->comment('CAMPO PARAMETROS NIVEL');
            $table->string('s_valoracion', 255)->comment('CAMPO DE TEXTO VALORACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
