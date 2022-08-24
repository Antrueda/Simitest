<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisDiaFestivosTable extends Migration
{
    private $tablaxxx = 'sis_dia_festivos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('dia')->comment('DIA FESTIVO');
            $table->integer('mes')->comment('MES DEL DIA FESTIVO');
            $table->integer('anio')->comment('AÑO DEL DIA FESTIVO');
            $table->unique(['dia','mes','anio'],'dife_un1');
            $table = CamposMagicos::magicos($table);
        });


        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('dia')->comment('DIA FESTIVO');
            $table->integer('mes')->comment('MES DEL DIA FESTIVO');
            $table->integer('anio')->comment('AÑO DEL DIA FESTIVO');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS DÍAS FESTIVOS DEL AÑO'");
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
