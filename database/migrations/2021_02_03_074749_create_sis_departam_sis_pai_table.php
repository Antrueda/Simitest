<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSisDepartamSisPaiTable extends Migration
{
    private $tablaxxx = 'sis_departam_sis_pai';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sis_departam_id')->unsigned();
            $table->bigInteger('sis_pai_id')->unsigned();
            $table->string('simianti_id')->nullable();
            $table->foreign('sis_departam_id')->references('id')->on('sis_departams');
            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
            $table->unique(['sis_departam_id','sis_pai_id'],'paidep_un1');
            $table = CamposMagicos::magicos($table);
        });
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RALACION DE LOS PAISES CON LOS DEPARTAMENTOS'");

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
