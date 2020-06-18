<?php

use App\Traits\Db\DbTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitVspaTablaTresTable extends Migration
{
    use  DbTrait;
    private $tablaxxx = 'mit_vspa_tabla_tres';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mit_vspa_id')->unsigned();
            $table->bigInteger('prm_cinco_uno_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_ocho_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_nueve_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_diez_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_once_id')->unsigned()->nullable();
            $table->bigInteger('prm_cinco_doce_id')->unsigned()->nullable();
            $table->foreign('prm_cinco_uno_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_ocho_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_nueve_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_diez_id')->references('id')->on('parametros');
            $table->foreign('prm_cinco_once_id')->references('id')->on('parametros');
            // $table->foreign('prm_cinco_doce_id')->references('id')->on('parametros');
            $table->foreign('mit_vspa_id')->references('id')->on('mit_vspa');
            $table->unique(['id', 'mit_vspa_id']);
            $table->timestamps();
        });

        $comments =  $this->tablaxxx;
        $this->getCommentTable($this->tablaxxx,'',$comments);
        $this->getForeignKey($this->tablaxxx,'prm_cinco_doce_id','parametros','id','mvttres_fk1');
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('mit_vspa_id');
            // $table->bigInteger('prm_seis_uno_id');
            // $table->bigInteger('prm_seis_dos_id');
            // $table->bigInteger('prm_seis_tres_id');
            // $table->bigInteger('prm_seis_cuatro_id');
            // $table->bigInteger('prm_seis_cinco_id');
            // $table->bigInteger('prm_seis_seis_id');

            $table->timestamps();
        });
        $comments = "TABLA QUE ALMACENARA LOS LOGS DE LA TABLA {$this->tablaxxx}";
        $this->getCommentTable($this->tablaxxx,'h_',$comments);
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
