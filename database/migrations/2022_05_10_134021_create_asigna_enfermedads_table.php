<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaEnfermedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_enfermedads', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('diag_id')->nullable()->unsigned()->comment('ID DIAGNOSTICO');
            $table->foreign('diag_id')->references('id')->on('diagnosticos');
            $table->integer('enfe_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('enfe_id')->references('id')->on('enfermedads');
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
        Schema::dropIfExists('asigna_enfermedads');
    }
}
