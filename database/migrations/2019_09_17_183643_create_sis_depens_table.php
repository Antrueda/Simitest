<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisDepensTable extends Migration
{
    private $tablaxxx = 'sis_depens';
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
            $table->bigInteger('i_prm_sexo_id')->unsigned();
            $table->string('s_direccion');
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('sis_upzbarri_id')->unsigned();
            $table->string('s_telefono');
            $table->string('s_correo');
            $table->Integer('itiestan')->default(0)->comment('TIEMPO STANDAR PARA EL CARGUE DE INFORMACION');
            $table->Integer('itiegabe')->default(0)->comment('TIEMPO GABELA PARA EL CARGUE DE INFORMACION');
            $table->Integer('itigafin')->default(0)->comment('TIEMPO GABELA FIN DE MES PARA EL CARGE DE INFORMACION');
            $table->bigInteger('estusuario_id')->unsigned()->nullable()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('i_prm_cvital_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tdependen_id')->references('id')->on('parametros');
            $table->foreign('estusuario_id')->references('id')->on('estusuarios');

            $table->foreign('i_prm_sexo_id')->references('id')->on('parametros');
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
            $table->foreign('sis_municipio_id')->references('id')->on('sis_municipios');
            $table->foreign('sis_upzbarri_id')->references('id')->on('sis_upzbarris');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS DEPENDENCIAS DEL IDIPRON CONTENIENDO LOS DATOS DE UBICACIÓN Y DE CONTACTO'");
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
