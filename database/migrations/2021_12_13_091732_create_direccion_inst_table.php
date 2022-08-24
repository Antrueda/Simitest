<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionInstTable extends Migration
{
    private $tablaxxx = 'direccion_inst';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('direc_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->longText('justificacion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('inter_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('seguimiento_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('intra_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('sis_entidad_id')->nullable()->unsigned()->comment('ID DE LA ENTIDAD');
            $table->integer('ent_servicio_id')->nullable()->unsigned()->comment('ID DE LA ENTIDAD');
            $table->string('nombre_entidad')->nullable()->comment('CAMPO NOMBRE ENTIDAD');
            $table->string('no_docinter')->nullable()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('nombreinter')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('telefonointer')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('intercargo')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table = CamposMagicos::getForeign($table, 'prm_tipoenti_id', 'parametros');
            $table->foreign('inter_id')->references('id')->on('parametros');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
            $table->foreign('intra_id')->references('id')->on('parametros');
            $table->foreign('ent_servicio_id')->references('id')->on('sis_entidad_sis_servicio');
            $table->foreign('direc_id')->references('id')->on('direccionamientos');
            $table = CamposMagicos::magicos($table);
        });
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('direc_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->longText('justificacion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('inter_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('seguimiento_id')->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('intra_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->integer('sis_entidad_id')->nullable()->unsigned()->comment('ID DE LA ENTIDAD');
            $table->integer('ent_servicio_id')->nullable()->unsigned()->comment('ID DE LA ENTIDAD');
            $table->string('nombre_entidad')->nullable()->comment('CAMPO NOMBRE ENTIDAD');
            $table->string('no_docinter')->nullable()->comment('CAMPO PARAMETRO DEPENDENCIA O UPI');
            $table->string('nombreinter')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('telefonointer')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table->string('intercargo')->nullable()->comment('CAMPO PRIMER NOMBRE ACOMPAÑANTE');
            $table = CamposMagicos::getForeign($table, 'prm_tipoenti_id', 'parametros');
            $table = CamposMagicos::h_magicos($table);
        });
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
