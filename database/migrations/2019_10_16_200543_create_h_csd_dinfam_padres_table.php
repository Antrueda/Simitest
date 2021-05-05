<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdDinfamPadresTable extends Migration
{
    private $tablaxxx = 'h_csd_dinfam_padres';
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
            $table->integer('prm_convive_id')->unsigned()->comment('CAMPO PARAMETRO CONVIVE');
            $table->integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
            $table->integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
            $table->integer('ano')->unsigned()->nullable()->comment('CAMPO AÑO');
            $table->integer('hijo')->unsigned()->comment('CAMPO PARAMETRO HIJOS');
            $table->integer('prm_separa_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SEPARACION');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
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