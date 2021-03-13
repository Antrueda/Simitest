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
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('responsable_id')->unsigned()->nullable();
            $table->integer('ai_salmay_id')->unsigned();
            $table->integer('autoriza_id')->unsigned()->nullable();
            $table->timestamp('hora_salida');
            $table->integer('telefono');
            $table->integer('retorna_id')->unsigned()->nullable();
            $table->date('fecharetorno')->nullable();
            $table->timestamp('horaretorno')->nullable();
            $table->longText('observacion')->nullable();
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
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
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
