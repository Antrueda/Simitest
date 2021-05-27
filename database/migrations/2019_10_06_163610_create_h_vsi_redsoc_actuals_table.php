<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiRedsocActualsTable extends Migration
{
    private $tablaxxx = 'h_vsi_redsoc_actuals';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->integer('prm_tipo_id')->unsigned()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('nombre')->comment('CAMPO NOMBRE DE RED');
            $table->longText('servicio')->comment('CAMPO SERVICIO DE LA RED');
            $table->string('telefono')->nullable()->comment('CAMPO TELEFONO DE LA RED');
            $table->string('direccion')->nullable()->comment('CAMPO DIRECCION DE LA RED');
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
