<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFosStsesTable extends Migration
{
    private $tablaxxx = 'fos_stses';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fos_tse_id')->unsigned();
            $table->text('codigo', 6)->nullable();
            $table->string('nombre', 120);
            $table->string('descripcion', 4000)->nullable();
            $table->foreign('fos_tse_id')->references('id')->on('fos_tses');
            $table->bigInteger('estusuario_id')->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DEL SUBTIPO DE SEGUIMIENTO REALIZADO DE LA PERSONA ENTREVISTADA, FICHA DE OBSERVACION'");
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
