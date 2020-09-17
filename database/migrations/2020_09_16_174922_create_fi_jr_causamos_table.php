<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiJrCausamosTable extends Migration
{
    private $tablaxxx = 'fi_jr_causasmos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_justrest_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE RIESGO');
            $table->bigInteger('prm_riesgo_id')->unsigned();
            $table->foreign('fi_justrest_id')->references('id')->on('fi_justrests');
            $table->foreign('prm_riesgo_id')->references('id')->on('parametros');
            
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA DE CAUSAS RIESGO DE FICHA DE INGRESO JUSTICIA RESTAURATIVA'");
    
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
