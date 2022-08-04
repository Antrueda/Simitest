<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsociarCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociar_casos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('tipo_id')->nullable()->unsigned()->comment('ID DIAGNOSTICO');
            $table->foreign('tipo_id')->references('id')->on('tipo_casos');
            $table->integer('tema_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('tema_id')->references('id')->on('tema_casos');
            $table->integer('segui_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('segui_id')->references('id')->on('seguimiento_casos');
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
        Schema::dropIfExists('asociar_casos');
    }
}
