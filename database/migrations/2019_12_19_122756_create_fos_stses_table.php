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
            $table->increments('id')->start(1)->nocache();
            $table->string('codigo', 6)->nullable()->comment('CODIGO SUBTIPO DE SEGUIMIENTO');
            $table->string('nombre', 120)->comment('NOMBRE SUBTIPO DE SEGUIMIENTO');
            $table->string('descripcion',4000)->nullable()->comment('DESCRIPCION SUBTIPO DE SEGUIMIENTO');
            $table->integer('estusuario_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DEL SUBTIPO DE SEGUIMIENTO REALIZADO DE LA PERSONA ENTREVISTADA, FICHA DE OBSERVACION'");
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
