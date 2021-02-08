<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiJrCausassisTable extends Migration
{
    private $tablaxxx = 'fi_jr_causassis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('fi_justrest_id')->unsigned()->comment('REGISTRO JUSTICIA RESTAURATIVA AL QUE SE LE ASIGNA CAUSA');
            $table->bigInteger('prm_situacion_id')->unsigned();
            $table->foreign('fi_justrest_id')->references('id')->on('fi_justrests');
            $table->foreign('prm_situacion_id')->references('id')->on('parametros');

            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA DE CAUSAS SITUACION DE FICHA DE INGRESO JUSTICIA RESTAURATIVA'");
    }

    /**
     *
     *
     *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
