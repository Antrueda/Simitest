<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAgConveniosTable extends Migration
{
    private $tablaxxx = 'h_ag_convenios';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_convenio');
            $table->bigInteger('i_prm_tconvenio_id')->unsigned();
            $table->bigInteger('i_prm_entidad_id')->unsigned();
            $table->string('s_descripcion');
            $table->bigInteger('i_nconvenio');
            $table->dateTime('d_subscrip');
            $table->dateTime('d_terminac');
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
