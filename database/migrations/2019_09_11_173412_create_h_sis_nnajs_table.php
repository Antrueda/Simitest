<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateHSisNnajsTable extends Migration
{
    private $tablaxxx = 'h_sis_nnajs';
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
            $table->Integer('simianti_id')->nullable()->default(0)->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table->integer('prm_nuevoreg_id')->nullable()->default(227)->unsigned()->comment('SABER SI EL REGISTRO ES NUEVO O VIENE DEL ANTIGUO SIMI');
            $table = CamposMagicos::h_magicos($table);
        });
        $dataxxxx['tablaxxx']=$this->tablaxxx;
        $dataxxxx['comentar']='LOS LOGS DE LA TABLA '.$this->tablaxxx;
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
