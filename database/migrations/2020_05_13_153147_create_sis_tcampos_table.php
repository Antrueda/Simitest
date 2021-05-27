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
            $table->string('s_descripcion')->nullable()->comment('OPCION EN EL COMBO DE LOS REPOTES');
            $table->integer('sis_tabla_id')->unsigned()->comment('TABLA CON LA QUE SE ENCUENTRA RELACIONADO EL CAMPO');
            $table->foreign('sis_tabla_id','tcam_fk1')->references('id')->on('sis_tablas');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES ASOCIADOS A CADA PREGUNTA Y SU UBICACIÓN EN LAS DIFERENTES TABLAS DE LA BASE DE DATOS'");
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
