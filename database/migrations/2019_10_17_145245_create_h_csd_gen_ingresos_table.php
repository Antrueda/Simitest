<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdGenIngresosTable extends Migration
{
    private $tablaxxx = 'h_csd_gen_ingresos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->longText('observacion');
            $table->integer('prm_actividad_id')->unsigned();
            $table->string('trabaja')->nullable();
            $table->integer('prm_informal_id')->unsigned()->nullable();
            $table->integer('prm_otra_id')->unsigned()->nullable();
            $table->integer('prm_laboral_id')->unsigned()->nullable();
            $table->integer('prm_frecuencia_id')->unsigned()->nullable();
            $table->integer('intensidad')->unsigned()->nullable();
            $table->integer('prm_dificultad_id')->unsigned();
            $table->longText('razon')->nullable();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
