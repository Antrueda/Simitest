<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiDatosBasicosTable extends Migration
{
    private $tablaxxx = 'fi_datos_basicos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_apodo')->nullable();
            $table = CamposMagicos::getForeign($table, 'sis_nnaj');
            $table->bigInteger('prm_tipoblaci_id')->unsigned()->comment('TIPO DE POBLACION LA QUE PERTENECE EL NNAJ');
            $table->foreign('prm_tipoblaci_id')->references('id')->on('parametros');
            $table->bigInteger('prm_estrateg_id')->unsigned()->comment('ESTRTATEGIA A LA QUE APLICA EL NNAJ');
            $table->foreign('prm_estrateg_id')->references('id')->on('parametros');
            $table->bigInteger('prm_servicio_id')->unsigned()->comment('SERVICIO A LA QUE APLICA EL NNAJ');
            $table->foreign('prm_servicio_id')->references('id')->on('parametros');
            $table->bigInteger('prm_vestimenta_id')->unsigned()->comment('ESTADO DE LA VESTIMENTA DEL NNAJ')->nullable();
            $table->foreign('prm_vestimenta_id')->references('id')->on('parametros');
            $table = CamposMagicos::getForeign($table, 'sis_docfuen');

            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS BASICOS DEL NNAJ, YA SEA QUE VENGAN DE LA FICHA DE INGRESO, VALORACIÓN SICOSOCIAL O CONSULTA SOCIAL EN DOMICILIO.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_apodo')->nullable();
            $table->Integer('sis_nnaj_id');
            $table->bigInteger('prm_tipoblaci_id')->unsigned()->comment('TIPO DE POBLACION LA QUE PERTENECE EL NNAJ');
            $table->bigInteger('prm_estrateg_id')->unsigned()->comment('ESTRTATEGIA A LA QUE APLICA EL NNAJ');
            $table->bigInteger('prm_vestimenta_id')->unsigned()->comment('ESTADO DE LA VESTIMENTA DEL NNAJ')->nullable();
            $table->bigInteger('prm_servicio_id')->unsigned()->comment('SERVICIO A LA QUE APLICA EL NNAJ');
            // $table->Integer('sis_nnaj_id');
            $table->Integer('sis_docfuen_id');

            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
