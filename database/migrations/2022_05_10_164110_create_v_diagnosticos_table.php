<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\CamposMagicos\CamposMagicos;
>>>>>>> b378e9ef141a04188248453408e50c81202985c5
=======
use App\CamposMagicos\CamposMagicos;
>>>>>>> 1df46b87032bba8f62b475553840ef2ceb38f4f5
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVDiagnosticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_diagnosticos', function (Blueprint $table) {
<<<<<<< HEAD
<<<<<<< HEAD
            $table->id();
            $table->timestamps();
=======
=======
>>>>>>> 1df46b87032bba8f62b475553840ef2ceb38f4f5
            $table->increments('id')->start(1)->nocache();
            $table->integer('vmg_id')->unsigned()->nullable()->comment('CAMPO ID MEDICINA GENERAL');
            $table->foreign('vmg_id')->references('id')->on('vsmedicinas');
            $table->integer('diag_id')->unsigned()->nullable()->comment('CAMPO ID DE MODULO');
            $table->foreign('diag_id')->references('id')->on('diagnosticos');
            $table->integer('esta_id')->unsigned()->nullable()->comment('CAMPO ID DE MODULO');
            $table->foreign('esta_id')->references('id')->on('parametros');
            $table->string('codigo')->nullable()->comment('CAMPO ID DE UNIDAD');
            $table->longText('concepto')->nullable()->comment('CAMPO NUMERO DE CALIFICACION DE CONOCIMIENTO');

            
        
            $table = CamposMagicos::magicos($table);
<<<<<<< HEAD
>>>>>>> b378e9ef141a04188248453408e50c81202985c5
=======
>>>>>>> 1df46b87032bba8f62b475553840ef2ceb38f4f5
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_diagnosticos');
    }
}
