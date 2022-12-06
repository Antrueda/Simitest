<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabrrdSegs extends Migration
{
    private $tablaxxx = 'labrrd_segs';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('labrrd_id')->unsigned()->comment('CAMPO ID VALORACION LAB-RRD');
            $table->date('fechdili')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_origen_id')->unsigned()->comment('UPI ORIGEN');
            $table->integer('sis_atenc_id')->unsigned()->comment('UPI ATENCION');
            $table->integer('prm_faseacomp')->unsigned()->comment('FASE DE ACOMPANAMIENTO');
            $table->text('observacion_pro')->comment('OBSERVACIONES SOBRE EL PROCESO');
            $table->string('lugar_externo', 120)->nullable()->comment('LUGAR EXPACIO EXTERNO');
            $table->tinyInteger('num_sesion')->comment('NUMERO DE SESION');
            $table->text('observacion_afront')->nullable()->comment('OBSERVACIONES Capacidad de Afrontamiento');
            $table->text('observacion_impu')->nullable()->comment('OBSERVACIONES Sensación Impunidad');
            $table->text('observacion_violen')->nullable()->comment('OBSERVACIONES relaciones violentas');
            $table->text('observacion_auto')->nullable()->comment('OBSERVACIONES Estigma y Autoestigma');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('labrrd_id')->references('id')->on('labrrds');
            $table->foreign('prm_faseacomp')->references('id')->on('parametros');
        });
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
