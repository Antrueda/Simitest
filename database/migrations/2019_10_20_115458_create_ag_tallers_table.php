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
            $table->bigIncrements('id');
            $table->String('s_taller');
            $table->text('s_descripcion');
            $table->bigInteger('ag_tema_id')->unsigned();
            $table->foreign('ag_tema_id')->references('id')->on('ag_temas');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA CLASIFICACIÓN DE TALLERES BRINDADOS A LOS BENEFICIARIOS DEL IDIPRON PERTECECIENTES A LAS ACTIVIDADES GRUPALES'");
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
