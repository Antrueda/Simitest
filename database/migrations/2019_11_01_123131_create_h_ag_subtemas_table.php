<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAgSubtemasTable extends Migration
{
    private $tablaxxx = 'h_ag_subtemas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ag_taller_id')->unsigned()->nullable()->comment('LLAVE FORANEA DEL TALLER');
            $table->string('s_subtema')->comment('NOMBRE DEL SUBTEMA');
            $table->string('s_descripcion',4000)->comment('DESCRIPCION DEL SUBTEMA');
            $table->integer('estusuario_id')->unsigned()->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
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
