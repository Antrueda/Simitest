<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiComposicionFamisTable extends Migration
{
    private $tablaxxx = 'h_fi_composicion_famis';
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
            $table->string('s_nombre_identitario')->nullable();
            $table->string('s_telefono')->nullable();
            $table->date('d_nacimiento');
            $table->bigInteger('i_prm_ocupacion_id')->unsigned();
            $table->bigInteger('i_prm_vinculado_idipron_id')->unsigned();
            $table->bigInteger('i_prm_convive_nnaj_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned('IDENTIFICADOR CON EL QUE SE CREO EL REGISTRO DEL COMPONENTE FAMILIAR');
            $table->bigInteger('sis_nnajnnaj_id')->unsigned()->comment('NNAJ AL QUE PERTENCEN LOS COMPONENTES FAMILIARES');
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
