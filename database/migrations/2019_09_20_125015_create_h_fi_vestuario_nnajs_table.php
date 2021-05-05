<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiVestuarioNnajsTable extends Migration
{
    private $tablaxxx = 'h_fi_vestuario_nnajs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_t_pantalon_id')->unsigned()->comment('CAMPO TIPO DE PANTALON');
            $table->integer('prm_t_camisa_id')->unsigned()->comment('CAMPO TIPO DE CAMISA');
            $table->integer('prm_t_zapato_id')->unsigned()->comment('CAMPO TIPO DE ZAPATO');
            $table->integer('prm_sexo_etario_id')->unsigned()->comment('CAMPO TALLA DE ROPA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID DE NNAJ');
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