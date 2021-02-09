<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdDinFamiliarsTable extends Migration
{
    private $tablaxxx = 'csd_din_familiars';
    private $tablaxxx2 = 'csd_dinfam_antecedente';
    private $tablaxxx3 = 'csd_dinfam_problema';
    private $tablaxxx4 = 'csd_dinfam_norma';
    private $tablaxxx5 = 'csd_dinfam_establecen';
    private $tablaxxx6 = 'csd_dinfam_incumple';
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
            $table->longText('descripcion')->nullable();
            $table->longText('relevantes');
            $table->string('s_doc_adjunto', 150)->nullable();
            $table->integer('prm_familiar_id')->nullable()->unsigned();
            $table->integer('prm_hogar_id')->nullable()->unsigned();
            $table->longText('descripciona');
            $table->integer('prm_bogota_id')->unsigned();
            $table->integer('prm_traslado_id')->unsigned()->nullable();
            $table->string('jefea')->nullable();
            $table->integer('prm_jefea_id')->unsigned()->nullable();
            $table->string('jefeb')->nullable();
            $table->integer('prm_jefeb_id')->unsigned()->nullable();
            $table->longText('descripcionb');
            $table->integer('prm_cuidador_id')->unsigned()->nullable();
            $table->longText('descripcionc');
            $table->longText('afronta');
            $table->integer('prm_norma_id')->unsigned();
            $table->integer('prm_conoce_id')->unsigned()->nullable();
            $table->longText('observacion')->nullable();;
            $table->integer('prm_actuan_id')->unsigned()->nullable();
            $table->longText('porque')->nullable();
            $table->integer('prm_solucion_id')->unsigned();
            $table->integer('prm_problema_id')->unsigned();
            $table->integer('prm_destaca_id')->unsigned();
            $table->integer('prm_positivo_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id','csdifa_pk1')->references('id')->on('parametros');
            $table->foreign('csd_id','csdifa_pk2')->references('id')->on('csds');
            $table->foreign('prm_familiar_id','csdifa_pk3')->references('id')->on('parametros');
            $table->foreign('prm_hogar_id','csdifa_pk4')->references('id')->on('parametros');
            $table->foreign('prm_bogota_id','csdifa_pk5')->references('id')->on('parametros');
            $table->foreign('prm_traslado_id','csdifa_pk6')->references('id')->on('parametros');
            $table->foreign('prm_jefea_id','csdifa_pk7')->references('id')->on('parametros');
            $table->foreign('prm_jefeb_id','csdifa_pk8')->references('id')->on('parametros');
            $table->foreign('prm_cuidador_id','csdifa_pk9')->references('id')->on('parametros');
            $table->foreign('prm_norma_id','csdifa_pk10')->references('id')->on('parametros');
            $table->foreign('prm_conoce_id','csdifa_pk11')->references('id')->on('parametros');
            $table->foreign('prm_actuan_id','csdifa_pk12')->references('id')->on('parametros');
            $table->foreign('prm_solucion_id','csdifa_pk13')->references('id')->on('parametros');
            $table->foreign('prm_problema_id','csdifa_pk14')->references('id')->on('parametros');
            $table->foreign('prm_destaca_id','csdifa_pk15')->references('id')->on('parametros');
            $table->foreign('prm_positivo_id','csdifa_pk16')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA DINAMICA FAMILIAR DE LA PERSONA ENTREVISTADA, SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id'],'csdian_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS ANTECEDENTES DE PROBLEMAS SOCIALES ASOCIADOS CON LA FAMILIA ACTUAL, PREGUNTA 6.1 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id'],'csdipr_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS PRINCIPALES PROBLEMATICAS ASOCIADAS CON LA FAMILIA ACTUAL DE LA PERSONA ENTREVISTADA, PREGUNTA 6.13 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id'],'csdino_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS ACTUACIONES DE LOS MIEMBROS DE LA FAMILIA FRENTE A LAS NORMAS DE LA PERSONA ENTREVISTADA, PREGUNTA 6.20 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id'],'csdies_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE PERSONAS QUE ESTABLECEN LAS NORMAS EN EL HOGAR DE LA PERSONA ENTREVISTADA, PREGUNTA 6.17 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id'],'csdinc_un1');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS ACTUACIONES CUANDO NO SE CUMPLEN LAS REGLAS EN LA FAMILIA DE LA PERSONA ENTREVISTADA, PREGUNTA 6.23 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");
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
