<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeRecuadmisTable extends Migration
{
    private $tablaxxx = 'ae_recuadmis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->String('s_recurso')->comment('NOMBRE DEL RECURSO');
            $table->integer('prm_trecurso_id')->comment('TIPO DE RECURSO');
            $table->integer('prm_umedida_id')->comment('UNIDAD DE MEDIDA DEL RECURSO');
            $table->integer('estusuario_id')->unsigned()->comment('JUSTIFICACION DEL REGISTRO');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicosFk($table, ['aere_fk', 1, 2, 3]);
        });
        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->String('s_recurso')->comment('NOMBRE DEL RECURSO');
            $table->integer('prm_trecurso_id')->comment('TIPO DE RECURSO');
            $table->integer('prm_umedida_id')->comment('UNIDAD DE MEDIDA DEL RECURSO');
            $table->integer('estusuario_id')->unsigned()->comment('JUSTIFICACION DEL REGISTRO');
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }

}
