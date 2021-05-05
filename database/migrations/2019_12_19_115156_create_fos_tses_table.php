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
            $table->increments('id')->start(1)->nocache();
            $table->integer('area_id')->unsigned()->comment('CAMPO ID AREA');
            $table->integer('estusuario_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->string('nombre', 120)->comment('NOMBRE TIPO DE SEGUIMIENTO');
            $table->longText('descripcion')->nullable()->comment('DESCRIPCION TIPO DE SEGUIMIENTO');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DEL TIPO DE SEGUIMIENTO REALIZADO DE LA PERSONA ENTREVISTADA, FICHA DE OBSERVACION'");
    }

    public function down()
    {
        Schema::dropIfExists('fos_tses');
    }
}
