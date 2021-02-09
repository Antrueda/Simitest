<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiEstEmocionalsTable extends Migration
{
    private $tablaxxx = 'h_vsi_est_emocionals';
    private $tablaxxx2 = 'h_vsi_estemo_adecuado';
    private $tablaxxx3 = 'h_vsi_estemo_dificulta';
    private $tablaxxx4 = 'h_vsi_estemo_estresante';
    private $tablaxxx5 = 'h_vsi_estemo_motivo';
    private $tablaxxx6 = 'h_vsi_estemo_lesiva';
    private $tablaxxx7 = 'h_vsi_estemo_contexto';

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
            $table->integer('prm_siente_id')->unsigned();
            $table->longText('descripcion_siente');
            $table->integer('prm_reacciona_id')->unsigned()->nullable();
            $table->longText('descripcion_reacciona');
            $table->longText('descripcion_adecuado')->nullable();;
            $table->longText('descripcion_dificulta')->nullable();;
            $table->integer('prm_estresante_id')->unsigned();
            $table->longText('descripcion_estresante')->nullable();
            $table->integer('prm_morir_id')->unsigned();
            $table->integer('dia_morir')->unsigned()->nullable();
            $table->integer('mes_morir')->unsigned()->nullable();
            $table->integer('ano_morir')->unsigned()->nullable();
            $table->integer('prm_pensamiento_id')->unsigned()->nullable();
            $table->integer('prm_amenaza_id')->unsigned()->nullable();
            $table->integer('prm_intento_id')->unsigned()->nullable();
            $table->integer('ideacion')->unsigned()->nullable();
            $table->integer('amenaza')->unsigned()->nullable();
            $table->integer('intento')->unsigned()->nullable();
            $table->integer('prm_riesgo_id')->unsigned()->nullable();
            $table->integer('dia_ultimo')->unsigned()->nullable();
            $table->integer('mes_ultimo')->unsigned()->nullable();
            $table->integer('ano_ultimo')->unsigned()->nullable();
            $table->longText('descripcion_motivo')->nullable();
            $table->integer('prm_lesiva_id')->unsigned()->nullable();
            $table->longText('descripcion_lesiva')->nullable();
            $table->integer('prm_sueno_id')->unsigned();
            $table->integer('dia_sueno')->unsigned()->nullable();
            $table->integer('mes_sueno')->unsigned()->nullable();
            $table->integer('ano_sueno')->unsigned()->nullable();
            $table->longText('descripcion_sueno')->nullable();
            $table->integer('prm_alimenticio_id')->unsigned();
            $table->integer('dia_alimenticio')->unsigned()->nullable();
            $table->integer('mes_alimenticio')->unsigned()->nullable();
            $table->integer('ano_alimenticio')->unsigned()->nullable();
            $table->longText('descripcion_alimenticio')->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_estemocional_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_estemocional_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_estemocional_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_estemocional_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_estemocional_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('vsi_estemocional_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx7}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
