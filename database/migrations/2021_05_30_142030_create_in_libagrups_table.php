<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateInLibagrupsTable extends Migration
{
    private $tablaxxx = 'in_libagrups';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_indiliba_id')->unsigned()->comment('LINEA BASE PADRE DEL GRUPO');
            $table->integer('prm_tipoblac_id')->default(651)->unsigned()->comment('TIPO DE POBLACION');
            $table->foreign('in_indiliba_id')->references('id')->on('in_indilibas');
            $table->foreign('prm_tipoblac_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_indiliba_id')->unsigned()->comment('LINEA BASE PADRE DEL GRUPO');
            $table->integer('prm_tipoblac_id')->unsigned()->comment('TIPO DE POBLACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE LA LINEA DE BASE DE UNA PERSONA BENEFICIARIA DEL IDIRPON CON EL ESTADO ACTIVO O INACTIVO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
