<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiRedsocPasadosTable extends Migration
{
    private $tablaxxx = 'h_vsi_redsoc_pasados';
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
            $table->string('nombre')->comment('CAMPO NOMBRE');
            $table->string('servicio')->comment('CAMPO SERVICIO');
            $table->integer('dia')->nullable()->comment('CAMPO DIA');
            $table->integer('mes')->nullable()->comment('CAMPO MES');
            $table->integer('ano')->nullable()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('ano_prestacion')->comment('CAMPO AÑO DE PRESTACION DE SERVICIO');
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
