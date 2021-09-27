<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiActEmocionalsTable extends Migration
{
    private $tablaxxx = 'h_vsi_act_emocionals';
    private $tablaxxx2 = 'h_vsi_actemo_fisiologica';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');
            $table->integer('prm_activa_id')->unsigned()->comment('CAMPO ACTIVIDAD EMOCIONAL');
            $table->string('descripcion')->nullable()->comment('CAMPO ABIERTO DESCRIPCION');
            $table->string('conductual')->nullable()->comment('CAMPO ABIERTO DESCRIPCION CONDUCTUAL');
            $table->string('cognitiva')->nullable()->comment('CAMPO ABIERTO DESCRIPCION COGNITIVA');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ACTIVACION FISIOLOGICA');
            $table->integer('vsi_actemocional_id')->unsigned()->comment('CAMPO ID ACTIVIDAD EMOCIONAL');
            $table->unique(['parametro_id', 'vsi_actemocional_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
