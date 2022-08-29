<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiBienvenidasTable extends Migration
{
    private $tablaxxx = 'h_fi_bienvenidas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_quiere_entrar_id')->unsigned()->comment('CAMPO PARAMETRO DE ENTRAR AL IDIPRON');
            $table->string('s_porque_quiere_entrar')->comment('CAMPO POR QUE QUIERE ENTRAR AL IDIPRON');
            $table->string('s_que_gustaria_hacer')->comment('CAMPO QUE LE GUSTARIA HACER EN EL IDIPRON');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID NNAJ');
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
