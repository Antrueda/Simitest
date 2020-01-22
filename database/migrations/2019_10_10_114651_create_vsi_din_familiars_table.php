<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiDinFamiliarsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('vsi_din_familiars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_familiar_id')->nullable()->unsigned();
            $table->bigInteger('prm_hogar_id')->nullable()->unsigned();
            $table->string('lugar', 4000);
            $table->bigInteger('prm_motivo_id')->unsigned()->nullable();
            $table->string('descripcion', 4000);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_familiar_id')->references('id')->on('parametros');
            $table->foreign('prm_hogar_id')->references('id')->on('parametros');
            $table->foreign('prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('vsi_dinfam_calle', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
        Schema::create('vsi_dinfam_delito', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
        Schema::create('vsi_dinfam_prostitucion', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
        Schema::create('vsi_dinfam_libertad', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
        Schema::create('vsi_dinfam_consumo', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
        Schema::create('vsi_dinfam_salud', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
        Schema::create('vsi_dinfam_cuidador', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
        Schema::create('vsi_dinfam_ausencia', function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('vsi_dinfam_ausencia');
        Schema::dropIfExists('vsi_dinfam_cuidador');
        Schema::dropIfExists('vsi_dinfam_salud');
        Schema::dropIfExists('vsi_dinfam_consumo');
        Schema::dropIfExists('vsi_dinfam_libertad');
        Schema::dropIfExists('vsi_dinfam_prostitucion');
        Schema::dropIfExists('vsi_dinfam_delito');
        Schema::dropIfExists('vsi_dinfam_calle');
        Schema::dropIfExists('vsi_din_familiars');
    }
}