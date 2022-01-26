<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisPestaniasTable extends Migration
{
    private $tablaxxx = 'sis_pestanias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('LLAVE PRIMARIA DE LA TABLA');
            $table->string('titupest')->comment('TITULO DE LA PESTAÑA');
            $table->string('routexxx')->comment('ROUTE QUE ARMA LA URL A LA QUE SE DEBE DIRIGIR LA PESTAÑA');
            $table->boolean('disabled')->default(0)->comment('INDICA SI LA PESTAÑA INICIALMENTE ESTA HABILITADA');
            $table->boolean('muespest')->default(0)->comment('INDICA SI LA PESTAÑA SE MUESTRA');
            $table->boolean('checkxxx')->default(0)->comment('MUSTRA SI LA PESTAÑA ESTA COMPLETA');
            $table->boolean('checkxxy')->default(0)->comment('MUSTRA SI LA PESTAÑA ESTA COMPLETA');
            $table->boolean('activexx')->default(0)->comment('ACTIVA LA PESTAÑA EN QUE SE ESTA');
            $table->boolean('tooltipx')->default(0)->comment('TEXTO QUE SE VA A MOSTRAR EN EL TOOLTIP');
            $table = CamposMagicos::getForeignFkNull($table, 'user_crea_id','pest_fk1','users');
            $table = CamposMagicos::getForeignFkNull($table, 'user_edita_id','pest_fk2','users');
            $table = CamposMagicos::getForeignFk($table, 'sis_esta','pest_fk3');
            $table = CamposMagicos::getForeignFk($table, 'sis_menu','pest_fk4');
            $table = CamposMagicos::getForeignFkNull($table, 'sis_pestania','pest_fk5');
           
            $table->timestamps();
            $table->softDeletes();
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
