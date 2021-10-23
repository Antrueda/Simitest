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
            $table->increments('id')->start(1)->nocache();
            $table->string('s_convenio')->comment('NOMBRE DEL CONVENIO');
            $table->integer('i_prm_tconvenio_id')->unsigned()->comment('TIPO DE CONVENIO');
            $table->integer('i_prm_entidad_id')->unsigned()->comment('TIPO DE ENTIDAD');
            $table->string('s_descripcion',4000)->comment('DESCRIPCION DEL CONVENIO');;
            $table->integer('i_nconvenio')->comment('NUMERO DE CONVENIO');
            $table->dateTime('d_subscrip')->comment('FECHA DE SUBSCRIPCION');
            $table->dateTime('d_terminac')->comment('FECHA DE TERMINACION');
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
