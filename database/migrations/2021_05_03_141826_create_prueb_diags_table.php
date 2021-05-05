<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebDiagsTable extends Migration
{
    private $tablaxxx = 'prueb_diags';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DEL NNAJ');
            $table->integer('responsable_id')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('prm_grado')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('prm_upi_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->date('fecha')->nullable()->comment('FECHA QUE RETORNA EL NNA');
            $table->string('s_doc_adjunto', 150)->nullable()->comment('CAMPO DATO ADJUNTO, GENOGRAMA');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('responsable_id')->references('id')->on('users');
            $table->foreign('prm_grado')->references('id')->on('parametros');
            $table->foreign('prm_upi_id')->references('id')->on('sis_depens');
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
