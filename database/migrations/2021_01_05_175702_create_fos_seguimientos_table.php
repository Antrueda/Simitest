<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFosSeguimientosTable extends Migration
{
    private $tablaxxx = 'fos_seguimientos';
 //   private $tablaxxx1 = 'fos_asignar';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->bigInteger('fos_tse_id')->unsigned();
            $table->bigInteger('fos_stses_id')->unsigned();
            $table->foreign('fos_tse_id')->references('id')->on('fos_tses');
            $table->foreign('fos_stses_id')->references('id')->on('fos_stses');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DEL SUBTIPO DE SEGUIMIENTO REALIZADO DE LA PERSONA ENTREVISTADA, FICHA DE OBSERVACION'");
  
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
