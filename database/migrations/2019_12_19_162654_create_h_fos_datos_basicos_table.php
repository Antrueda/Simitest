<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFosDatosBasicosTable extends Migration
{
    private $tablaxxx = 'h_fos_datos_basicos';
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
            $table->integer('sis_entidad_id')->unsigned()->comment('CAMPO DE ID DE LA ENTIDAD')->nullable();
            $table->integer('i_responsable')->unsigned();
            $table->text('s_observacion');
            $table->integer('fi_compfami_id')->unsigned()->nullable();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
