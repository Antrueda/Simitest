<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInAccionGestionsTable extends Migration
{
    private $tablaxxx = 'in_accion_gestions';
    private $tablaxxx2 = 'in_actsoportes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_actividad_id')->unsigned();
            $table->integer('i_prm_ttiempo_id')->unsigned();
            $table->integer('in_lineabase_nnaj_id')->unsigned();
            $table->integer('sis_docfuen_id')->unsigned(); //cambiar por in_linea_fuente en un futuro
            $table->integer('i_tiempo');
            $table->decimal('i_porcentaje', 5, 2);
            $table->foreign('in_lineabase_nnaj_id')->references('id')->on('in_lineabase_nnajs');
            $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');
            $table->foreign('i_prm_ttiempo_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE LA LINEA DE BASE DE LOS NNAJ, ACTIVIDADES, TIEMPO, SOPORTES DOCUMENTALES QUE SERVIRA DE EVIDENCIA SOBRE LAS ACTUALCIONES REALIZADAS EN LOS NNAJ'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_accion_gestion_id')->unsigned();
            $table->integer('sis_fsoporte_id')->unsigned();
            $table->foreign('in_accion_gestion_id')->references('id')->on('in_accion_gestions');
            $table->foreign('sis_fsoporte_id')->references('id')->on('sis_fsoportes');
            $table->unique(['in_accion_gestion_id', 'sis_fsoporte_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS SOPORTES DOCUMENTALES DE LA TABLA in_accion_gestions'");
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
