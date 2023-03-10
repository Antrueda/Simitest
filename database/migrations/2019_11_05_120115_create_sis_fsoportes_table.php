<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisFsoportesTable extends Migration
{
    private $tablaxxx = 'sis_fsoportes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('CAMPO DE TEXTO NOMBRE');
            $table->integer('sis_actividad_id')->unsigned()->comment('ID DE sis_actividads');
            $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');
            $table->unique(['nombre', 'sis_actividad_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS NOMBRES DE LOS FORMATOS DE LAS ACTIVIDADES REGISTRADAS'");
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
