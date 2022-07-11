<?php


use App\CamposMagicos\CamposMagicos;
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
