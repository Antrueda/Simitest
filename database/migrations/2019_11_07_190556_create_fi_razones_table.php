<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiRazonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_razones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('s_porque_ingresar');
            $table->bigInteger('userd_id')->unsigned();
            
            $table->bigInteger('sis_dependend_id')->unsigned();
            $table->bigInteger('userr_id')->unsigned();
            $table->bigInteger('sis_dependenr_id')->unsigned();
            $table->bigInteger('i_prm_estado_ingreso_id')->unsigned();

            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            
            $table->foreign('userd_id')->references('id')->on('users');
            $table->foreign('userr_id')->references('id')->on('users');
            
            $table->foreign('sis_dependend_id')->references('id')->on('sis_dependens');
            
            
            // $table->dropForeign('fi_razones_sis_dependenr_id_foreign');
            // $table->renameColumn('sis_dependenr_id ', 'fi_razones_fk1');
            // $table->foreign('sis_dependenr_id')->references('id')->on('sis_dependens');

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_estado_ingreso_id')->references('id')->on('parametros');
            
        });

        Schema::create('fi_documentos_anexas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_razone_id')->unsigned();
            $table->bigInteger('i_prm_documento_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->text('s_ruta');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_razone_id')->references('id')->on('fi_razones');
            $table->foreign('i_prm_documento_id')->references('id')->on('parametros');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_documentos_anexas');
        Schema::dropIfExists('fi_razones');
    }
}
