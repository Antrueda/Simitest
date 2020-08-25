<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInBaseFuentesTable extends Migration
{
    private $tablaxxx = 'in_base_fuentes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_fuente_id')->unsigned();
            $table->bigInteger('sis_docfuen_id')->unsigned();
            $table->foreign('in_fuente_id')->references('id')->on('in_fuentes');
            $table->foreign('sis_docfuen_id')->references('id')->on('sis_docfuens');
            $table->unique(['in_fuente_id', 'sis_docfuen_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA AL RELACION ENTRE LA LINEA DE BASE DE CON EL SOPORTE DOCUMENTAL'");
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
