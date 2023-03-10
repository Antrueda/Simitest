<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAgResponsablesTable extends Migration
{
    private $tablaxxx = 'h_ag_responsables';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('i_prm_responsable_id')->unsigned()->comment('PARAMETRO RESPONSABLE O ACOMPAÑANTE');
            $table->integer('ag_actividad_id')->unsigned()->comment('LLAVE FORANEA DE LA ACTIVIDAD');
            $table->integer('sis_obse_id')->unsigned()->nullable()->comment('LLAVE FORANEA DE OBSERVACIONES');
            $table->integer('user_id')->unsigned()->comment('ID DEL USUARIO RESPONSABLE');
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
