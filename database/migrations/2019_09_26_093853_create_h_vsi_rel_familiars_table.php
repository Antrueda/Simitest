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
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO DE ID DE VSI');
            $table->integer('prm_representativa_id')->unsigned()->comment('CAMPO PARAMETRO PERSONA MAS REPRESENTATIVA');
            $table->longText('representativa')->comment('CAMPO DE TEXTO PERSONA REPRESENTATIVA');
            $table->integer('prm_mala_id')->unsigned()->comment('CAMPO PARAMETRO MALAS RELACIONES');
            $table->integer('prm_relacion_id')->unsigned()->comment('CAMPO PARAMETRO RELACION CON SU FAMILIA');
            $table->integer('prm_gusto_id')->unsigned()->comment('CAMPO PARAMETRO A GUSTO CON EL TIPO DE RELACION');
            $table->longText('porque')->nullable()->comment('CAMPO DE TEXTO POR QUE TIPO DE RELACION');
            $table->integer('prm_familia_id')->unsigned()->comment('CAMPO TIPO DE RELACION CON LA FAMILIA');
            $table->integer('prm_denuncia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO PRESENTO ALGUNA DENUNCIA');
            $table->integer('prm_denunante_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ANTE CUAL AUTORIDAD');
            $table->longText('descripcion')->nullable()->comment('CAMPO DE TEXTO DESCRIPCION');
            $table->integer('prm_pareja_id')->unsigned()->comment('CAMPO PARAMETRO TIENE PAREJA');
            $table->integer('prm_dificultad_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DIFICULTAD CON LA PAREJA');
            $table->Integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
            $table->Integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
            $table->Integer('ano')->unsigned()->nullable()->comment('CAMPO AÑO');
            $table->integer('prm_responde_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO COMO RESPONDEN A LAS DIFICULTADES');
            $table->longText('descripcion1')->nullable()->comment('CAMPO DE TEXTO DESCRIPCION DIFICULTADES');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO MOTIVOS POR LA QUE NO EXISTEN BUENAS RELACIONES');
            $table->integer('vsi_relfamiliar_id')->unsigned()->comment('CAMPO DE ID RELACION FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO DETALLES DE LAS DIFICULTADES EN LAS RELACIONES FAMILIARES');
            $table->integer('vsi_relfamiliar_id')->unsigned()->comment('CAMPO DE ID RELACION FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ACCIONES REALIZADAS ANTE LOS CASO DE VIOLENCIA');
            $table->integer('vsi_relfamiliar_id')->unsigned()->comment('CAMPO DE ID RELACION FAMILIAR');
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
