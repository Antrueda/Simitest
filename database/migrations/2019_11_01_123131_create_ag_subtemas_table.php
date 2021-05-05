<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgSubtemasTable extends Migration
{
    private $tablaxxx = 'ag_subtemas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ag_taller_id')->unsigned()->nullable()->comment('LLAVE FORANEA DEL TALLER');
            $table->string('s_subtema')->comment('NOMBRE DEL SUBTEMA');
            $table->text('s_descripcion')->comment('DESCRIPCION DEL SUBTEMA');
            $table->foreign('ag_taller_id')->references('id')->on('ag_tallers');
            $table->integer('estusuario_id')->unsigned()->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS SUBTEMAS ASOCIADOS A UN TEMA EXISTENTE DENTRO DE UN TALLER ASOCIADO A LAS ACCIONES GRUPALES'");
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
