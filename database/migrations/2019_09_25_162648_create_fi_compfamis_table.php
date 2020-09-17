<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiCompfamisTable extends Migration
{
    private $tablaxxx = 'fi_compfamis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_parentesco_id')->unsigned();
            $table->string('s_telefono')->nullable();
            $table->date('d_nacimiento');
            $table->bigInteger('i_prm_ocupacion_id')->unsigned();
            $table->bigInteger('prm_reprlega_id')->unsigned()->default(228);
            $table->string('s_nombre_identitario')->nullable();
            $table->bigInteger('i_prm_vinculado_idipron_id')->unsigned();
            $table->bigInteger('i_prm_convive_nnaj_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned('IDENTIFICADOR CON EL QUE SE CREO EL REGISTRO DEL COMPONENTE FAMILIAR');
            $table->bigInteger('sis_nnajnnaj_id')->unsigned()->comment('NNAJ AL QUE PERTENCEN LOS COMPONENTES FAMILIARES');

            $table->foreign('i_prm_parentesco_id')->references('id')->on('parametros');
            $table->foreign('prm_reprlega_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ocupacion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_vinculado_idipron_id')->references('id')->on('parametros');
            $table->foreign('i_prm_convive_nnaj_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_nnajnnaj_id')->references('id')->on('sis_nnajs');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BÁSICOS DEL NUCLEO FAMILIAR DE LA PERSONA ENTREVISTADA, SECCION 5 DE LA FICHA DE INGRESO'");
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
