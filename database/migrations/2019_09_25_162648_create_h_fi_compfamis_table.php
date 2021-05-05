<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiCompfamisTable extends Migration
{
    private $tablaxxx = 'h_fi_compfamis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_parentesco_id')->unsigned()->comment('PARAMETRO PARENTESCO');
            $table->string('s_telefono')->nullable()->comment('CAMPO DE TELEFONO');
            $table->date('d_nacimiento')->comment('CAMPO FECHA DE NACIMIENTO');
            $table->integer('i_prm_ocupacion_id')->unsigned()->comment('CAMPO TIPO DE OCUPACION');
            $table->integer('prm_reprlega_id')->unsigned()->default(228)->comment('CAMPO SI ES REPRESENTATE LEGAL');
            $table->string('s_nombre_identitario')->nullable()->comment('CAMPO DE NOMBRE IDENTITARIO');
            $table->integer('i_prm_vinculado_idipron_id')->unsigned()->comment('CAMPO SI HA ESTADO VINCULADO AL IDIPRON');
            $table->integer('i_prm_convive_nnaj_id')->unsigned()->comment('CAMPO SI CONVIVE CON NNAJ');
            $table->integer('sis_nnaj_id')->unsigned('IDENTIFICADOR CON EL QUE SE CREO EL REGISTRO DEL COMPONENTE FAMILIAR');
            $table->integer('sis_nnajnnaj_id')->unsigned()->comment('NNAJ AL QUE PERTENCEN LOS COMPONENTES FAMILIARES');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
