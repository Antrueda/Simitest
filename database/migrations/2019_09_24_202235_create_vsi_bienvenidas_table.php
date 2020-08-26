<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiBienvenidasTable extends Migration
{
    private $tablaxxx = 'vsi_bienvenidas';
    private $tablaxxx2 = 'vsi_bienvenida_motivo';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table = CamposMagicos::getForeign($table, 'vsi');
            $table->string('descripcion', 4000);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL MOTIVO DE INGRESO DE LA PERSONA REGISTRADA EN EL SISTEMA AL IDIPRON'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table = CamposMagicos::getForeign($table, 'vsi_bienvenida');
            $table = CamposMagicos::getForeign($table, 'parametro_id','parametros');
            $table->unique(['parametro_id', 'vsi_bienvenida_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LAS RAZONES DE INGRESO DE LA PERSONA REGISTRADA EN EL SISTEMA AL IDIPRON'");
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
