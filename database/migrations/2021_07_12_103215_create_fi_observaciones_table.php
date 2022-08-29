<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiObservacionesTable extends Migration
{
    private $tablaxxx = 'fi_observaciones';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('observaciones',4000)->nullable()->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table = CamposMagicos::magicos($table);
        });
    //    DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE REGISTRA LAS OBSERVACIONES FICHA DE INGRESO'");

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
