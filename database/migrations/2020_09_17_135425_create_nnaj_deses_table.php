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
            $table->bigInteger('sis_servicio_id')->unsigned();
            $table->foreign('sis_servicio_id')->references('id')->on('sis_servicios');
            $table->bigInteger('nnaj_upi_id')->unsigned();
            $table->bigInteger('prm_principa_id')->unsigned();
            $table->foreign('prm_principa_id')->references('id')->on('parametros');
            $table->foreign('nnaj_upi_id')->references('id')->on('nnaj_upis');
            $table = CamposMagicos::magicos($table);
        });

       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL SERVICIO DEL NNAJ.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->Integer('sis_servicio_id');
            $table->bigInteger('nnaj_upi_id')->unsigned();
            $table->bigInteger('prm_principa_id')->unsigned();
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
