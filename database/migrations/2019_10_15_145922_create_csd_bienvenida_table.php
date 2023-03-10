<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdBienvenidaTable extends Migration
{
    private $tablaxxx = 'csd_bienvenidas';
    private $tablaxxx2 = 'csd_bienvenida_motivos';
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
            $table->integer('prm_persona_id')->unsigned()->comment('PARAMETRO TIPO DE PERSONA');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_persona_id')->references('id')->on('parametros');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA CONSULTA SOCIAL EN DOMICILIO DE UNA PERSONA ENTREVISTADA, DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('PARAMETRO DE MOTIVOS');
            $table->integer('csd_bienvenida_id')->unsigned()->comment('CAMPO ID DE CSD BIENVENIDA');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_bienvenida_id')->references('id')->on('csd_bienvenidas');
            $table->unique(['parametro_id', 'csd_bienvenida_id']);
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS MOTIVOS DE LA CONSULTA SOCIAL EN DOMICILIO DE UNA PERSONA ENTREVISTADA, DE CONSULTA SOCIAL EN DOMICILIO'");
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
