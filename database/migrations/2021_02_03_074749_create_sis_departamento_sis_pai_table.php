<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSisDepartamentoSisPaiTable extends Migration
{
    private $tablaxxx = 'sis_departamento_sis_pai';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_pai_id')->unsigned();
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
            $table->unique(['sis_departamento_id','sis_pai_id']);
            $table->foreignId('pd_pk1') // UNSIGNED BIG INT
            ;
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RALACION DE LOS PAISES CON LOS DEPARTAMENTOS'");

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
