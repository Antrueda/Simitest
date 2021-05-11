<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdRedsocPasadosTable extends Migration
{
    private $tablaxxx = 'h_csd_redsoc_pasados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->string('nombre')->comment('CAMPO DE TEXTO NOMBRE ENTIDAD');
            $table->string('servicios', 120)->comment('CAMPO DE TEXTO SERVICIO');
            $table->integer('cantidad')->nullable()->comment('CAMPO DE NUMERICO DE CANTIDAD');
            $table->integer('prm_unidad_id')->unsigned()->comment('CAMPO PARAMETRO UNIDAD');
            $table->integer('ano')->comment('CAMPO DE AÑO');
            $table->longText('retiro')->nullable()->comment('CAMPO DE TEXTO DE RETIRO');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
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
