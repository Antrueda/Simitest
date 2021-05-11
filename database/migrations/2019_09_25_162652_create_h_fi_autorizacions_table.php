<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiAutorizacionsTable extends Migration
{
    private $tablaxxx = 'h_fi_autorizacions';
    private $tablaxxx2 = 'h_fi_modalidads';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_autorizo_id')->unsigned()->comment('CAMPO PARAMETRO AUTORIZO');
            $table->integer('fi_compfami_id')->unsigned()->comment('CAMPO DE ID DEL COMPONENTE FAMILIAR');
            $table->integer('i_prm_parentesco_id')->unsigned()->comment('CAMPO PARENTESCO');
            $table->date('d_autorizacion')->comment('CAMPO FECHA DE AUTORIZACION');
            $table->integer('i_prm_tipo_diligencia_id')->unsigned()->comment('CAMPO TIPO DE DILIGENCIA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_autorizacion_id')->unsigned();
            $table->integer('i_prm_modalidad_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
