<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHInAccionGestionsTable extends Migration
{
    private $tablaxxx = 'h_in_accion_gestions';
    private $tablaxxx2 = 'h_in_actsoportes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('sis_actividad_id')->unsigned();
            $table->bigInteger('i_prm_ttiempo_id')->unsigned();
            $table->bigInteger('in_lineabase_nnaj_id')->unsigned();
            $table->bigInteger('sis_docfuen_id')->unsigned(); //cambiar por in_linea_fuente en un futuro
            $table->integer('i_tiempo');
            $table->decimal('i_porcentaje', 5, 2);
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('in_accion_gestion_id')->unsigned();
            $table->bigInteger('sis_fsoporte_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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
