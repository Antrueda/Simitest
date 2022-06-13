<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemiasignasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remiasignas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('remi_id')->nullable()->unsigned()->comment('ID DIAGNOSTICO');
            $table->foreign('remi_id')->references('id')->on('remisions');
            $table->integer('reesp_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('reesp_id')->references('id')->on('remiespecials');
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
        Schema::dropIfExists('remiasignas');
    }
}
