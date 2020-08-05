<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInValoracionsTable extends Migration
{
    private $tablaxxx = 'in_valoracions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_lineabase_nnaj_id')->unsigned();
            $table->bigInteger('i_prm_categoria_id')->unsigned();
            $table->bigInteger('i_prm_cactual_id')->unsigned();
            $table->bigInteger('i_prm_avance_id')->unsigned();
            $table->bigInteger('i_prm_nivel_id')->unsigned();
            $table->string('s_valoracion', 255);
            $table->foreign('in_lineabase_nnaj_id')->references('id')->on('in_lineabase_nnajs');
            $table->foreign('i_prm_categoria_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cactual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_id')->references('id')->on('parametros');
            $table->foreign('i_prm_nivel_id')->references('id')->on('parametros');
            $table->unique(['in_lineabase_nnaj_id', 'i_prm_cactual_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS VALORACIONES REALIZADAS AL NNAJ'");
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