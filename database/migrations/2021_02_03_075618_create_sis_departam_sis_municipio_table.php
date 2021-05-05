<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSisDepartamSisMunicipioTable extends Migration
{
    private $tablaxxx = 'sis_departam_sis_municipio';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->integer('sis_departam_id')->unsigned();
            $table->integer('sis_municipio_id')->unsigned();
            $table->string('simianti_id')->nullable();
            $table->foreign('sis_departam_id','depmun_pk1')->references('id')->on('sis_departams');
            $table->foreign('sis_municipio_id','depmun_pk2')->references('id')->on('sis_municipios');
            $table->unique(['sis_departam_id','sis_municipio_id'],'depmun_un1');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RALACION DE LOS DEPARTAMENTOS CON LOS MUNICIPIOS'");
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
