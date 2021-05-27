<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSalidaJovenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private $tablaxxx = 'salida_jovenes';
    private $tablaxxx2 = 'jovenes_motivos';
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
            $table->integer('responsable_id')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('ai_salmay_id')->unsigned()->comment('ID DE LA SALIDA Y PERMISO PARA MAYORES');
            $table->integer('autoriza_id')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamp('hora_salida')->comment('HORA DE SALIDA');
            $table->integer('telefono')->comment('TELEFONO DE CONTACTO');
            $table->integer('retorna_id')->unsigned()->nullable()->comment('PARAMETRO RETORNA');
            $table->date('fecharetorno')->nullable()->comment('FECHA QUE RETORNA EL NNA');
            $table->timestamp('horaretorno')->nullable()->comment('HORA QUE RETORNA EL NNAJ');
            $table->longText('observacion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->foreign('ai_salmay_id')->references('id')->on('ai_salida_mayores');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('responsable_id')->references('id')->on('fi_compfamis');
            $table->foreign('autoriza_id')->references('id')->on('parametros');
            $table->foreign('retorna_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
            ;
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA QUIENES ASISTEN A LAS ACTIVIDADES ASOCIADOS A LOS TALLERES DENTRO DE LAS ACCIONES GRUPALES'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->integer('parametro_id')->unsigned();
            $table->integer('salida_jovenes_id')->unsigned();
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('salida_jovenes_id')->references('id')->on('salida_jovenes');
            $table->unique(['parametro_id', 'salida_jovenes_id']);
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS PORMENORES DE LA SALIA DE UN BENEFICIARIO DE LOS SERVICIOS DE UNA UPI'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
