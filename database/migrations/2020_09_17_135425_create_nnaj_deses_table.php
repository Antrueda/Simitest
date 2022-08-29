<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNnajDesesTable extends Migration
{
    private $tablaxxx = 'nnaj_deses';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table = CamposMagicos::getForeignFk($table, 'sis_servicio', 'nnds_fk1');
            $table = CamposMagicos::getForeignFk($table, 'nnaj_upi', 'nnds_fk2');
            $table = CamposMagicos::getForeignFk($table, 'prm_principa_id', 'nnds_fk3', 'parametros');
            $table = CamposMagicos::magicosFk($table, ['nnds_fk', 4, 5, 6]);
            $table->unique(['nnaj_upi_id', 'sis_servicio_id'], 'nnds_un1');
        });

       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL SERVICIO DEL NNAJ.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->Integer('sis_servicio_id');
            $table->integer('nnaj_upi_id')->unsigned();
            $table->integer('prm_principa_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
