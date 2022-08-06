<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVEntrevintrasTable extends Migration
{
    private $tablaxxx = 'v_entrevintras';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('entrevista_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->foreign('entrevista_id')->references('id')->on('v_entrevistas');
            $table->integer('area_id')->unsigned()->comment("REMITIR AREA INTRA");
            $table->foreign('area_id')->references('id')->on('areas');
            $table = CamposMagicos::magicos($table);
        });
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
