<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisTcamposTable extends Migration
{
    private $tablaxxx = 'h_sis_tcampos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_campo')->comment('NOMBRE DEL CAMPO');
            // $table->string('s_numero')->comment('NUMERO DE LA PREGUNTA EN EL DOCUMENTO FISICO');
            $table->integer('sis_tabla_id')->unsigned()->comment('TABLA EN QUE ES ENCUENTRA EL CAMPO');
            // $table->integer('in_pregunta_id')->unsigned()->comment('PREGUNTA CON LA QUE SE ENCUENTRA ASOCIADO EL CAMPO');
            // $table->integer('temacombo_id')->unsigned()->comment('TEMA EN EL QUE ESTAN ASOCIADAS LAS RES PUESTAS DE LA PREGUNTA');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
