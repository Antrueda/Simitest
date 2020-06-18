<?php

use App\Traits\Db\DbTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitVspaTablaDosTable extends Migration
{
    use DbTrait;
    private $tablaxxx = 'mit_vspa_tabla_dos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mit_vspa_id')->unsigned();
            $table->bigInteger('prm_cuatro_uno_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_ocho_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_nueve_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_diez_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_once_id')->unsigned()->nullable();
            $table->bigInteger('prm_cuatro_doce_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('prm_cuatro_uno_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_ocho_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_nueve_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_diez_id')->references('id')->on('parametros');
            $table->foreign('prm_cuatro_once_id')->references('id')->on('parametros');
            //$table->foreign('prm_cuatro_doce_id')->references('id')->on('parametros');

            $table->foreign('mit_vspa_id')->references('id')->on('mit_vspa');
            $table->unique(['id', 'mit_vspa_id']);
        });
        $comments = "TABLA 2 DE VESPA";
        $this->getCommentTable($this->tablaxxx, '', $comments);
        $this->getForeignKey($this->tablaxxx,'prm_cuatro_doce_id','parametros','id','mvtdos_fk1');
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
