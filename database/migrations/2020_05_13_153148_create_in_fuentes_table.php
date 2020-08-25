<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInFuentesTable extends Migration
{
    private $tablaxxx = 'in_fuentes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_linea_base_id')->unsigned();
            $table->bigInteger('in_indicador_id')->unsigned();
            $table->foreign('in_linea_base_id')->references('id')->on('in_linea_bases');
            $table->foreign('in_indicador_id')->references('id')->on('in_indicadors');
            $table->unique(['in_indicador_id', 'in_linea_base_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE LA LINEA DE BASE DE LOS BENEFICIARIOS DE LOS SERVICIOS DEL IDIPRON CON LOS INDICADOR OBSERVADO POR EL FUNCIONARIO'");
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
