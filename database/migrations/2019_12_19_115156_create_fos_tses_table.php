<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFosTsesTable extends Migration
{
    private $tablaxxx = 'fos_tses';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('estusuario_id')->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table->string('nombre', 120);
            $table->text('descripcion', 4000)->nullable();
            $table->foreign('area_id')->references('id')->on('areas');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DEL TIPO DE SEGUIMIENTO REALIZADO DE LA PERSONA ENTREVISTADA, FICHA DE OBSERVACION'");
    }

    public function down()
    {
        Schema::dropIfExists('fos_tses');
    }
}
