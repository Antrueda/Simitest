<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiRelFamiliarsTable extends Migration
{
    private $tablaxxx = 'h_vsi_rel_familiars';
    private $tablaxxx2 = 'h_vsi_relfam_motivo';
    private $tablaxxx3 = 'h_vsi_relfam_dificultad';
    private $tablaxxx4 = 'h_vsi_relfam_acciones';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('vsi_id')->unsigned();
            $table->integer('prm_representativa_id')->unsigned();
            $table->longText('representativa');
            $table->integer('prm_mala_id')->unsigned();
            $table->integer('prm_relacion_id')->unsigned();
            $table->integer('prm_gusto_id')->unsigned();
            $table->longText('porque')->nullable();
            $table->integer('prm_familia_id')->unsigned();
            $table->integer('prm_denuncia_id')->unsigned()->nullable();
            $table->integer('prm_denunante_id')->unsigned()->nullable();
            $table->longText('descripcion')->nullable();
            $table->integer('prm_pareja_id')->unsigned();
            $table->integer('prm_dificultad_id')->unsigned()->nullable();
            $table->Integer('dia')->unsigned()->nullable();
            $table->Integer('mes')->unsigned()->nullable();
            $table->Integer('ano')->unsigned()->nullable();
            $table->integer('prm_responde_id')->unsigned()->nullable();
            $table->longText('descripcion1')->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_relfamiliar_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_relfamiliar_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_relfamiliar_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
