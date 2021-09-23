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
