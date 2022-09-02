<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDastAcciones extends Migration
{
    private $tablaxxx = 'dast_acciones';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre', 100)->comment('NOMBRE DE LA ACCION');
            $table->text('descripcion')->comment('DESCRIPCION DE LA ACCION');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre', 100)->comment('NOMBRE DE LA ACCION');
            $table->text('descripcion')->comment('DESCRIPCION DE LA ACCION');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
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
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
