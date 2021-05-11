<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateInLigrusTable extends Migration
{
    private $tablaxxx = 'in_ligrus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_base_fuente_id')->unsigned()->comment('ID DE BASE FUENTE');
            $table->foreign('in_base_fuente_id')->references('id')->on('in_base_fuentes');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE LA LINEA DE BASE DE UNA PERSONA BENEFICIARIA DEL IDIRPON CON EL ESTADO ACTIVO O INACTIVO'");
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
