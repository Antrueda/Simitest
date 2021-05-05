<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdDinFamiliarsTable extends Migration
{
    private $tablaxxx = 'h_csd_din_familiars';
    private $tablaxxx2 = 'h_csd_dinfam_antecedente';
    private $tablaxxx3 = 'h_csd_dinfam_problema';
    private $tablaxxx4 = 'h_csd_dinfam_norma';
    private $tablaxxx5 = 'h_csd_dinfam_establecen';
    private $tablaxxx6 = 'h_csd_dinfam_incumple';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->longText('descripcion')->nullable()->comment('CAMPO DE TEXTO DESCRIPCION');
            $table->longText('relevantes')->comment('CAMPO DE TEXTO RELEVANTES');
            $table->string('s_doc_adjunto', 150)->nullable()->comment('CAMPO RUTA DEL ARCHIVO EN EL SERVIDOR');
            $table->integer('prm_familiar_id')->nullable()->unsigned()->comment('CAMPO TIPO DE HOGAR FAMILIAR');
            $table->integer('prm_hogar_id')->nullable()->unsigned()->comment('CAMPO TIPO DE HOGAR');
            $table->longText('descripciona')->comment('CAMPO DESCRIPCION(Interpretación de la composición familiar)');
            $table->integer('prm_bogota_id')->unsigned()->comment('CAMPO PARAMETRO HA VIVIDO EN BOGOTA');
            $table->integer('prm_traslado_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TRASLADO');
            $table->string('jefea')->nullable()->comment('CAMPO DE TEXTO JEFE 1 DE LA FAMILIA');
            $table->integer('prm_jefea_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO JEFE 1 DE LA FAMILIA');
            $table->string('jefeb')->nullable()->comment('CAMPO DE TEXTO JEFE 2 DE LA FAMILIA');
            $table->integer('prm_jefeb_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO JEFE 2 DE LA FAMILIA');
            $table->longText('descripcionb')->comment('CAMPO DESCRIPCION(de hechos relevantes en las etapas de desarrollo)');
            $table->integer('prm_cuidador_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ASUME EL CUIDADO O CRIANZA');
            $table->longText('descripcionc')->comment('CAMPO DESCRIPCION(CUIDADO O CRIANZA)');
            $table->longText('afronta')->comment('CAMPO AFRONTA LAS DIFICULTADES');
            $table->integer('prm_norma_id')->unsigned()->comment('CAMPO PARAMETRO NORMAS O LIMITES');
            $table->integer('prm_conoce_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO LA FAMILIA CONOCE LAS NORMAS O LIMITES');
            $table->longText('observacion')->nullable()->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->integer('prm_actuan_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO COMO ACTUAN');
            $table->longText('porque')->nullable()->comment('CAMPO PARAMETRO COMO ACTUAN');
            $table->integer('prm_solucion_id')->unsigned()->comment('CAMPO PARAMETRO COMO SOLUCIONAN');
            $table->integer('prm_problema_id')->unsigned()->comment('CAMPO PARAMETRO PROBLEMA');
            $table->integer('prm_destaca_id')->unsigned()->comment('CAMPO PARAMETRO COMO DESTACA LA FAMILIA');
            $table->integer('prm_positivo_id')->unsigned()->comment('CAMPO PARAMETRO COMO ACTUAN DE ANTE SUCESOS POSITIVOS');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ANTECEDENTES');
            $table->integer('csd_dinfamiliar_id')->unsigned()->comment('CAMPO ID DE DINAMICA FAMILIAR');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO PROBLEMATICAS');
            $table->integer('csd_dinfamiliar_id')->unsigned()->comment('CAMPO ID DE DINAMICA FAMILIAR');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ACTUACIONES');
            $table->integer('csd_dinfamiliar_id')->unsigned()->comment('CAMPO ID DE DINAMICA FAMILIAR');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO PERSONAS QUE ESTABLECEN NORMAS');
            $table->integer('csd_dinfamiliar_id')->unsigned()->comment('CAMPO ID DE DINAMICA FAMILIAR');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO ACTUACIONES CUANDO NO SE CUMPLEN LAS REGLAS');
            $table->integer('csd_dinfamiliar_id')->unsigned()->comment('CAMPO ID DE DINAMICA FAMILIAR');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");
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
