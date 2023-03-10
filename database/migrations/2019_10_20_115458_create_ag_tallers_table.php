<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgTallersTable extends Migration
{
    private $tablaxxx = 'ag_tallers';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->String('s_taller')->comment('NOMBRE DEL TALLER');
            $table->string('s_descripcion',4000)->comment('DESCRIPCION DEL TALLER');
            $table->integer('ag_tema_id')->unsigned()->comment('LLAVE FORANEA DEL TEMA');
            $table->foreign('ag_tema_id')->references('id')->on('ag_temas');
            $table->integer('estusuario_id')->unsigned()->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA CLASIFICACIÓN DE TALLERES BRINDADOS A LOS BENEFICIARIOS DEL IDIPRON PERTECECIENTES A LAS ACTIVIDADES GRUPALES'");
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
