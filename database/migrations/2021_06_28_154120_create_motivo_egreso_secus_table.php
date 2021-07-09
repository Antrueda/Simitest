<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivoEgresoSecusTable extends Migration
{
    private $tablaxxx = 'motivo_egreso_secus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre', 120)->comment('NOMBRE SUBTIPO DE SEGUIMIENTO');
            $table->longText('descripcion')->nullable()->comment('DESCRIPCION SUBTIPO DE SEGUIMIENTO');
            $table->integer('estusuario_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
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


