<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisNnajsTable extends Migration
{
    private $tablaxxx = 'sis_nnajs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('prm_escomfam_id')->unsigned()->comment('SABER SI EL REGISTRO QUE ESTA CREANDO ES UN NNAJ O UN COMPONENTE FAMILIAR');
            $table->integer('prm_nuevoreg_id')->default(227)->unsigned()->comment('SABER SI EL REGISTRO ES NUEVO O VIENE DEL ANTIGUO SIMI');
            $table->Integer('simianti_id')->default(0)->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table->foreign('prm_escomfam_id')->references('id')->on('parametros');
            $table->foreign('prm_nuevoreg_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        $dataxxxx['tablaxxx']=$this->tablaxxx;
        $dataxxxx['comentar']='EL LISTADO DE LOS NNAJ REGISTRADOS EN EL SISTEMA';
        CamposMagicos::setComentarios($dataxxxx);
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
