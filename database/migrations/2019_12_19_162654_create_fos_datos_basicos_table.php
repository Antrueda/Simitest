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
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DEL NNAJ');
            $table->integer('sis_depen_id')->unsigned()->comment('ID DE UPI O DEPENDENCIA');
            $table->date('d_fecha_diligencia')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('area_id')->unsigned()->comment('ID DE AREA');
            $table->integer('fos_tse_id')->unsigned()->comment('ID TIPO DE SEGUIMIENTO');
            $table->integer('fos_stse_id')->unsigned()->comment('ID SUBTIPO DE SEGUIMIENTO');
            $table->string('s_observacion')->comment('CAMPO DE TEXTO OBSERVACION');
            $table->integer('fi_compfami_id')->unsigned()->nullable()->comment('CAMPO ID ACUDIENTE');
            $table->integer('i_responsable')->unsigned()->comment('CAMPO DE ID RESPONSABLE');
            $table->integer('sis_entidad_id')->unsigned()->comment('CAMPO DE ID DE LA ENTIDAD')->nullable();
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');

            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
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
            $table->timestamps();
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
