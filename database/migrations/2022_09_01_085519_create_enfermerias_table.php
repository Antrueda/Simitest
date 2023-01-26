<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateEnfermeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('enfermerias', function (Blueprint $table) {
                $table->increments('id')->start(1)->nocache();


                $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
                $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
                $table->integer('sis_serv_id')->unsigned()->comment('SERVICIOS');
                $table->date('fecha')->comment('FECHA DE APLICACION');
                $table->text('sintoma')->comment('SINTOMA DE USUARIO');
                $table->integer('prm_motivoat_id')->unsigned()->comment('MOTIVO ATENCION');
                $table->integer('prm_tipoaten_id')->unsigned()->comment('TIPO ATENCION');


                $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
                $table = CamposMagicos::magicos($table);

                $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
                $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
                $table->foreign('sis_serv_id')->references('id')->on('sis_servicios');
                $table->foreign('prm_motivoat_id')->references('id')->on('parametros');
                $table->foreign('prm_tipoaten_id')->references('id')->on('parametros');
                $table->foreign('user_fun_id')->references('id')->on('users');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfermerias');
    }
}
