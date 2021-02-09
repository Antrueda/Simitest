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
            $table->increments('id')->start(1)->nocache();
            $table->integer('i_prm_parentesco_id')->unsigned();
            $table->string('s_nombre_identitario')->nullable();
            $table->string('s_telefono')->nullable();
            $table->date('d_nacimiento');
            $table->integer('prm_reprlega_id')->unsigned();
            $table->integer('i_prm_ocupacion_id')->unsigned();
            $table->integer('i_prm_vinculado_idipron_id')->unsigned();
            $table->integer('i_prm_convive_nnaj_id')->unsigned();
            $table->integer('sis_nnaj_id')->unsigned('IDENTIFICADOR CON EL QUE SE CREO EL REGISTRO DEL COMPONENTE FAMILIAR');
            $table->integer('sis_nnajnnaj_id')->unsigned()->comment('NNAJ AL QUE PERTENCEN LOS COMPONENTES FAMILIARES');
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
