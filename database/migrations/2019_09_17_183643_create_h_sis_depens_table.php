<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisDepensTable extends Migration
{
    private $tablaxxx = 'h_sis_depens';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->bigInteger('i_prm_cvital_id')->unsigned();
            $table->bigInteger('i_prm_tdependen_id')->unsigned();
            $table->bigInteger('sis_depen_id')->unsigned()->nullable();
            $table->bigInteger('i_prm_sexo_id')->unsigned();
            $table->string('s_direccion');
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('sis_upzbarri_id')->unsigned();
            $table->string('s_telefono');
            $table->string('s_correo');
            $table->Integer('itiestan')->nullable()->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->nullable()->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->nullable()->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->string('s_observacion',3000);
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
