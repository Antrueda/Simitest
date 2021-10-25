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
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->integer('prm_siente_id')->unsigned()->comment('CAMPO PARAMETRO DE COMO SE SIENTE');
            $table->string('descripcion_siente')->comment('CAMPO DESCRIPCION DE COMO SE SIENTE');
            $table->integer('prm_reacciona_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE COMO REACCIONA');
            $table->string('descripcion_reacciona')->comment('CAMPO DESCRIPCION DE COMO REACCIONA');
            $table->string('descripcion_adecuado')->nullable()->comment('CAMPO DESCRIPCION COMO REACCIONA ADECUADAMENTE');
            $table->string('descripcion_dificulta')->nullable()->comment('CAMPO DESCRIPCION DE QUE SE LE DIFICULTA');
            $table->integer('prm_estresante_id')->unsigned()->comment('CAMPO PARAMETRO SI SE LE HA PRESENTADO ALGUN ACONTECIMIENTO ESTRESANTE');
            $table->text('descripcion_estresante',4000)->nullable()->comment('CAMPO DESCRIPCION EL ACONTECIMIENTO ESTRESANTE');
            $table->integer('prm_morir_id')->unsigned()->comment('CAMPO SI HA TENIDO PENSAMIENTOS CON MORIRSE');
            $table->integer('dia_morir')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS DIAS');
            $table->integer('mes_morir')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS MESES');
            $table->integer('ano_morir')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS AÑOS');
            $table->integer('prm_pensamiento_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO PENSAMIENTOS DE QUITARSE LA VIDA');
            $table->integer('prm_amenaza_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO AMENAZAS CON QUITARSE LA VIDA');
            $table->integer('prm_intento_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO INTENTOS DE QUITARSE LA VIDA');
            $table->integer('ideacion')->unsigned()->nullable()->comment('CAMPO POR IDEACION');
            $table->integer('amenaza')->unsigned()->nullable()->comment('CAMPO POR AMENAZA');
            $table->integer('intento')->unsigned()->nullable()->comment('CAMPO POR INTENTO');
            $table->integer('prm_riesgo_id')->unsigned()->nullable()->comment('CAMPO NIVEL DE RIESGO');
            $table->integer('dia_ultimo')->unsigned()->nullable()->comment('CAMPO ULTIMO DIA QUE INTENTO QUITARSE LA VIDA');
            $table->integer('mes_ultimo')->unsigned()->nullable()->comment('CAMPO ULTIMO MES QUE INTENTO QUITARSE LA VIDA');
            $table->integer('ano_ultimo')->unsigned()->nullable()->comment('CAMPO ULTIMO AÑO QUE INTENTO QUITARSE LA VIDA');
            $table->text('descripcion_motivo',4000)->nullable()->comment('CAMPO DESCRIPCION DEL MOTIVO QUE INTENTO QUITARSE LA VIDA');
            $table->integer('prm_lesiva_id')->unsigned()->nullable()->comment('CAMPO CONDUCTAS AUTO LESIVA');
            $table->text('descripcion_lesiva',4000)->nullable()->comment('CAMPO DESCRIPCION DE CONDUCTAS AUTO LESIVAS');
            $table->integer('prm_sueno_id')->unsigned()->comment('CAMPO PROBLEMAS DE SUEÑO');
            $table->integer('dia_sueno')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS DIAS TIENE PROBLEMAS DE SUEÑO');
            $table->integer('mes_sueno')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS MESES TIENE PROBLEMAS DE SUEÑO');
            $table->integer('ano_sueno')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS AÑOS TIENE PROBLEMAS DE SUEÑO');
            $table->text('descripcion_sueno',4000)->nullable()->comment('CAMPO DESCRIPCION DEL PROBLEMA DE SUEÑO');
            $table->integer('prm_alimenticio_id')->unsigned()->comment('CAMPO VARIACION EN HABITOS ALIMENTICIOS ALIMENTICIOS');
            $table->integer('dia_alimenticio')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS DIAS TIENE VARIACION EN HABITOS ALIMENTICIOS');
            $table->integer('mes_alimenticio')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS MESES TIENE VARIACION EN HABITOS ALIMENTICIOS');
            $table->integer('ano_alimenticio')->unsigned()->nullable()->comment('CAMPO DESDE HACE CUANTOS AÑOS TIENE VARIACION EN HABITOS ALIMENTICIOS');
            $table->string('descripcion_alimenticio')->nullable()->comment('CAMPO DESCRIPCION DE VARIACION DE HABITOS ALIMENTICIOS');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO SENTIMIENTOS QUE LOGRA EXPRESAR ADECUADAMENTE');
            $table->integer('vsi_estemocional_id')->unsigned()->comment('CAMPO ID ESTADO EMOCIONAL');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO SENTIMIENTOS QUE SE LE DIFICULTA EXPRESAR ADECUADAMENTE');
            $table->integer('vsi_estemocional_id')->unsigned()->comment('CAMPO ID ESTADO EMOCIONAL');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ACONTECIMIENTOS ESTRESANTES');
            $table->integer('vsi_estemocional_id')->unsigned()->comment('CAMPO ID ESTADO EMOCIONAL');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO PENSAMIENTOS RELACIONADOS CON SUICIDIO');
            $table->integer('vsi_estemocional_id')->unsigned()->comment('CAMPO ID ESTADO EMOCIONAL');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO CONDUCTAS AUTO LESIVAS');
            $table->integer('vsi_estemocional_id')->unsigned()->comment('CAMPO ID ESTADO EMOCIONAL');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO CONTEXTO');
            $table->integer('vsi_estemocional_id')->unsigned()->comment('CAMPO ID ESTADO EMOCIONAL');
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
