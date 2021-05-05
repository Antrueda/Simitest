<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisTcamposTable extends Migration
{
    private $tablaxxx = 'sis_tcampos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_campo')->comment('NOMOBRE DEL CAMPO');
            // $table->string('s_numero')->comment('NUMERO DE LA PREGUNTA EN EL DOCUMENTO FISICO'); esto debe ir es tema combo
            $table->integer('sis_tabla_id')->unsigned()->comment('TABLA EN QUE ES ENCUENTRA EL CAMPO');
            // $table->integer('in_pregunta_id')->unsigned()->comment('PREGUNTA CON LA QUE SE ENCUENTRA ASOCIADO EL CAMPO');
            $table->integer('temacombo_id')->unsigned()->comment('PREGUNTA CON LA QUE SE ENCUENTRA ASOCIADO EL CAMPO');
            $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
            // $table->foreign('in_pregunta_id')->references('id')->on('in_preguntas');
            $table->foreign('temacombo_id')->references('id')->on('temacombos');
            // $table->unique(['sis_tabla_id',  'temacombo_id'],'siscam_un1');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES ASOCIADOS A CADA PREGUNTA Y SU UBICACIÓN EN LAS DIFERENTES TABLAS DE LA BASE DE DATOS'");
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
