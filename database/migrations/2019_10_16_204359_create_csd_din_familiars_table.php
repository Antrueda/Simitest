<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsdDinFamiliarsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('csd_din_familiars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->binary('descripcion')->nullable();
            $table->binary('relevantes');
            $table->bigInteger('prm_familiar_id')->nullable()->unsigned();
            $table->bigInteger('prm_hogar_id')->nullable()->unsigned();
            $table->binary('descripcion_0');
            $table->bigInteger('prm_bogota_id')->unsigned();
            $table->bigInteger('prm_traslado_id')->unsigned()->nullable();
            $table->string('jefe1')->nullable();
            $table->bigInteger('prm_jefe1_id')->unsigned()->nullable();
            $table->string('jefe2')->nullable();
            $table->bigInteger('prm_jefe2_id')->unsigned()->nullable();
            $table->binary('descripcion_1');
            $table->bigInteger('prm_cuidador_id')->unsigned();
            $table->binary('descripcion_2');
            $table->binary('afronta');
            $table->bigInteger('prm_norma_id')->unsigned();
            $table->bigInteger('prm_conoce_id')->unsigned()->nullable();
            $table->binary('observacion');
            $table->bigInteger('prm_actuan_id')->unsigned()->nullable();
            $table->string('porque', 4000)->nullable();
            $table->bigInteger('prm_solucion_id')->unsigned();
            $table->bigInteger('prm_problema_id')->unsigned();
            $table->bigInteger('prm_negativo_id')->unsigned();
            $table->bigInteger('prm_destaca_id')->unsigned();
            $table->bigInteger('prm_positivo_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_familiar_id')->references('id')->on('parametros');
            $table->foreign('prm_hogar_id')->references('id')->on('parametros');
            $table->foreign('prm_bogota_id')->references('id')->on('parametros');
            $table->foreign('prm_traslado_id')->references('id')->on('parametros');
            $table->foreign('prm_jefe1_id')->references('id')->on('parametros');
            $table->foreign('prm_jefe2_id')->references('id')->on('parametros');
            $table->foreign('prm_cuidador_id')->references('id')->on('parametros');
            $table->foreign('prm_norma_id')->references('id')->on('parametros');
            $table->foreign('prm_conoce_id')->references('id')->on('parametros');
            $table->foreign('prm_actuan_id')->references('id')->on('parametros');
            $table->foreign('prm_solucion_id')->references('id')->on('parametros');
            $table->foreign('prm_problema_id')->references('id')->on('parametros');
            $table->foreign('prm_negativo_id')->references('id')->on('parametros');
            $table->foreign('prm_destaca_id')->references('id')->on('parametros');
            $table->foreign('prm_positivo_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('csd_dinfam_antecedente', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('csd_dinfam_problema', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('csd_dinfam_norma', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table->engine = 'InnoDB';
        });
        Schema::create('csd_dinfam_establecen', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('csd_dinfam_establecen');
        Schema::dropIfExists('csd_dinfam_norma');
        Schema::dropIfExists('csd_dinfam_problema');
        Schema::dropIfExists('csd_dinfam_antecedente');
        Schema::dropIfExists('csd_din_familiars');
    }
}