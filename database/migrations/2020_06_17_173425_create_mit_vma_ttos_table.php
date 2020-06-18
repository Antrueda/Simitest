<?php

use App\Traits\Db\DbTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitVmaTtosTable extends Migration
{
    use  DbTrait;
    private $tablaxxx = 'mit_vma_ttos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('mit_vma_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('mit_vma_id')->references('id')->on('mit_vmas');
            $table->unique(['parametro_id', 'mit_vma_id']);
        });

        $comments =  $this->tablaxxx;
        $this->getCommentTable($this->tablaxxx,'',$comments);
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
