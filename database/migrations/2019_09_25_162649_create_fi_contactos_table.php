<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiContactosTable extends Migration
{
    private $tablaxxx = 'fi_contactos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_tipo_contacto_id')->unsigned();
            $table->string('s_contacto_condicion')->nullable();
            $table->bigInteger('i_prm_contacto_opcion_id')->nullable()->unsigned();
            $table->string('s_entidad_remite')->nullable();
            $table->date('d_fecha_remite_id')->nullable();
            $table->bigInteger('i_prm_motivo_contacto_id')->nullable()->unsigned();
            $table->bigInteger('i_prm_aut_tratamiento_id')->unsigned();
            
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_tipo_contacto_id')->references('id')->on('parametros');
            $table->foreign('i_prm_contacto_opcion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_contacto_id')->references('id')->on('parametros');
            $table->foreign('i_prm_aut_tratamiento_id')->references('id')->on('parametros');
            
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS DE CONTACTO DE LAS PERSONAS QUE SE PUEDEN CONTACTAR CON LOS NNAJ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
