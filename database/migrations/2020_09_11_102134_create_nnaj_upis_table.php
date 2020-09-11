<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNnajUpisTable extends Migration
{

    private $tablaxxx = 'nnaj_upis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table = CamposMagicos::getForeign($table, 'fi_datos_basico');
            $table->bigInteger('sis_depen_id')->unsigned();
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table = CamposMagicos::getForeign($table, 'sis_nnaj');
            $table = CamposMagicos::magicos($table);

            
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA UPI DEL NNAJ.'");
        
        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->Integer('fi_datos_basico_id');
            $table->Integer('sis_depen_id');
            $table->Integer('sis_nnaj_id');
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
