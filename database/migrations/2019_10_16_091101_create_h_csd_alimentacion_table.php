<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdAlimentacionTable extends Migration
{
    private $tablaxxx = 'h_csd_alimentacions';
    private $tablaxxx2 = 'h_csd_aliment_frec';
    private $tablaxxx3 = 'h_csd_aliment_compra';
    private $tablaxxx4 = 'h_csd_aliment_inge';
    private $tablaxxx5 = 'h_csd_aliment_prepara';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->integer('cant_personas')->unsigned()->comment('CAMPO CANTIDAD DE PERSONA');
            $table->integer('prm_horario_id')->unsigned();
            $table->integer('prm_apoyo_id')->unsigned();
            $table->integer('prm_entidad_id')->unsigned()->nullable();
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO COMPRA DE ALIMENTOS');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO SITIO DONDE COMPRA DE ALIMENTOS');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO CANTIDAD DE COMIDAS AL DIA');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO PERSONAS QUE PREPARAN LOS ALIMENTOS');
            $table->integer('csd_alimentacion_id')->unsigned()->comment('CAMPO ID ALIMENTACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
