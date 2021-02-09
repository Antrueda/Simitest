<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFosDatosBasicosTable extends Migration
{
    private $tablaxxx = 'fos_datos_basicos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('sis_depen_id')->unsigned();
            $table->date('d_fecha_diligencia');
            $table->integer('area_id')->unsigned();
            $table->integer('fos_tse_id')->unsigned();
            $table->integer('fos_stse_id')->unsigned();
            $table->text('s_observacion');
            $table->integer('fi_compfami_id')->unsigned()->nullable();
            $table->integer('i_responsable')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->integer('user_crea_id')->unsigned();
            $table->integer('sis_entidad_id')->unsigned()->comment('CAMPO DE ID DE LA ENTIDAD')->nullable();

            $table->integer('user_edita_id')->unsigned();
            
            $table->timestamps();
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('fos_tse_id')->references('id')->on('fos_tses');
            $table->foreign('fos_stse_id')->references('id')->on('fos_stses');
            $table->foreign('fi_compfami_id')->references('id')->on('fi_compfamis');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('i_responsable')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DE UN SEGUIMIENTO, FICHA DE OBSERVACION'");
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
