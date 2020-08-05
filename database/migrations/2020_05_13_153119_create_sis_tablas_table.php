<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisTablasTable extends Migration
{
    private $tablaxxx = 'sis_tablas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_tabla')->nullable();
            $table->string('s_descripcion')->nullable();
            $table->timestamps();

            $table->bigInteger('sis_documento_fuente_id')->unsigned();
            $table->foreign('sis_documento_fuente_id')->references('id')->on('sis_documento_fuentes');
        });
<<<<<<< HEAD
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS NOMBRES Y LA DESCRIPCIONES DE LAS TABLAS INVOLUCRADAS EN ALMACENAR LOS DATOS DE LOS FORMATOS EXISTENTES EN EL SISTEMA RELACIONADOS CON LOS DATOS DE LOS BENEFICIARIOS DEL IDIPRON.'");
=======
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA'");
>>>>>>> 70ad6171092e1840d78cae2433f2e6814035c86a
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
