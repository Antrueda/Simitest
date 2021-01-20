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
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_representativa_id')->unsigned();
            $table->string('representativa', 4000);
            $table->bigInteger('prm_mala_id')->unsigned();
            $table->bigInteger('prm_relacion_id')->unsigned();
            $table->bigInteger('prm_gusto_id')->unsigned();
            $table->text('porque', 4000)->nullable();
            $table->bigInteger('prm_familia_id')->unsigned();
            $table->bigInteger('prm_denuncia_id')->unsigned()->nullable();
            $table->bigInteger('prm_denunante_id')->unsigned()->nullable();
            $table->text('descripcion', 4000)->nullable();
            $table->bigInteger('prm_pareja_id')->unsigned();
            $table->bigInteger('prm_dificultad_id')->unsigned()->nullable();
            $table->Integer('dia')->unsigned()->nullable();
            $table->Integer('mes')->unsigned()->nullable();
            $table->Integer('ano')->unsigned()->nullable();
            $table->bigInteger('prm_responde_id')->unsigned()->nullable();
            $table->text('descripcion1', 4000)->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_relfamiliar_id')->unsigned();
            $table->unique(['parametro_id', 'vsi_relfamiliar_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");
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
