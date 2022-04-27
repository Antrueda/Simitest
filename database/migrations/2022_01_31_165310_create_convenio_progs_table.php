<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvenioProgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenio_progs', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre')->comment('NOMBRE DEL CONVENIO PROGRAMA');
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
        Schema::table('asissemas', function (Blueprint $table) {
            $table->dropForeign('ASISSEMAS_CONVENIO_PROG_ID_FK');
        });
        Schema::dropIfExists('convenio_progs');
    }
}
