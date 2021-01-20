<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHFiCsdVsiRedesPasadosTable extends Migration
{
    private $tablaxxx = 'h_fi_csd_vsi_redes_pasados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('servicios', 120);
            $table->integer('cantidad')->nullable();
            $table->bigInteger('prm_unidad_id')->unsigned();
            $table->integer('ano');
            $table->string('retiro', 4000)->nullable();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

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
