<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiDiscausasTable extends Migration
{
    private $tablaxxx = 'fi_discausas';
    private $commentx = 'FI 6.4.b LA DISCAPACIDAD FUE PRODUCIDA EN LA COMISION DE ALGUN ACTO ILEGAL?';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fi_salud_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->foreign('fi_salud_id')->references('id')->on('fi_saluds');
            $table->bigInteger('prm_discausa_id')->unsigned()->comment($this->commentx);
            $table->foreign('prm_discausa_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LAS RESPUESTAS A LA PReGUNTA: {$this->commentx}'");

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
