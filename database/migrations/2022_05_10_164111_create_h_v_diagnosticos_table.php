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
        Schema::create('h_v_diagnosticos', function (Blueprint $table) {
        $table->increments('id')->start(1)->nocache();
            $table->integer('vmg_id')->unsigned()->nullable()->comment('CAMPO ID MEDICINA GENERAL');
            $table->integer('diag_id')->unsigned()->nullable()->comment('CAMPO ID DE MODULO');
            $table->integer('esta_id')->unsigned()->nullable()->comment('CAMPO ID DE MODULO');
            $table->string('codigo')->nullable()->comment('CAMPO ID DE UNIDAD');
            $table->longText('concepto')->nullable()->comment('CAMPO NUMERO DE CALIFICACION DE CONOCIMIENTO');
            $table = CamposMagicos::h_magicos($table);

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
