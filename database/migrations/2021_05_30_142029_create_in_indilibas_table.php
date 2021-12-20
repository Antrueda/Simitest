<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInIndilibasTable extends Migration
{
    private $tablaxxx = 'in_indilibas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
           $table->increments('id')->start(1)->nocache();
            $table->integer('in_areaindi_id')->unsigned()->comment('INDICADOR');
            $table->integer('in_linea_base_id')->unsigned()->comment('LINEA BASE');
            $table->integer('prm_nivelxxx_id')->nullable()->unsigned()->comment('NIVEL DE LA LINEA BASE');
            $table->foreign('prm_nivelxxx_id')->references('id')->on('parametros');
            $table->integer('prm_categori_id')->nullable()->unsigned()->comment('CATATEGORIA DE LINEA BASE');
            $table->foreign('prm_categori_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicosFk($table,['inlb']);
            $table->foreign('in_areaindi_id','inlb_fk4')->references('id')->on('in_areaindis');
            $table->foreign('in_linea_base_id','inlb_fk5')->references('id')->on('in_linea_bases');
            $table->unique(['in_areaindi_id','in_linea_base_id'],'inlb_un1');
        });
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
           $table->increments('id')->start(1)->nocache();
            $table->integer('in_areaindi_id')->unsigned()->comment('INDICADOR');
            $table->integer('in_linea_base_id')->unsigned()->comment('LINEA BASE');
            $table->integer('prm_nivelxxx_id')->nullable()->unsigned()->comment('NIVEL DE LA LINEA BASE');
            $table->integer('prm_categori_id')->nullable()->unsigned()->comment('CATATEGORIA DE LINEA BASE');
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
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
