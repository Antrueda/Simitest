<?php

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
            $table->bigIncrements('id');
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();

            $table->bigInteger('prm_t_pantalon_id')->unsigned();
            $table->bigInteger('prm_t_camisa_id')->unsigned();
            $table->bigInteger('prm_t_zapato_id')->unsigned();
            $table->bigInteger('prm_sexo_etario_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();

            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps();
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
