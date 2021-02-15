<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgCarguedocsTable extends Migration
{
    private $tablaxxx = 'ag_carguedocs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ag_actividad_id')->unsigned();
            $table->integer('i_prm_documento_id')->unsigned();
            $table->text('s_ruta');
            // $table->foreign('ag_actividad_id','agca_fk1')->references('id')->on('ag_actividads');
            $table->foreign('i_prm_documento_id','agca_fk2')->references('id')->on('parametros');



            $table = CamposMagicos::magicos($table);
        });
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
