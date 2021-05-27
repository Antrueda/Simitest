<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebPresabesTable extends Migration
{
    private $tablaxxx = 'prueb_presabes';
    /**
     * Run the migrations. prueb_presabes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('user_doc')->unsigned()->nullable()->comment('ID DE LA PERSONA RESPONSABLE');
            $table->integer('prm_asignatura')->unsigned()->nullable()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->longText('presaber')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->foreign('user_doc')->references('id')->on('users');
            $table->foreign('prm_asignatura')->references('id')->on('parametros');
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
