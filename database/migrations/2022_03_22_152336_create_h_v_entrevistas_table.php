<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHVEntrevistasTable extends Migration
{
    private $tablaxxx = 'h_v_entrevistas';
    private $tablaxxx1 = 'h_v_entrevareas';
    private $tablaxxx2 = 'h_v_entrevintras';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DILIGENCIAMIENTO DE LA ENTREVISTA');
            $table->longText('anteclinicos')->nullable()->comment('ANTECEDENTES CLINICOS');
            
            $table->longText('observacion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('upi_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_consumo')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_autocui')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_habitos')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_instrum')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_patrone')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->integer('prm_remite')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->string('intertext')->nullable()->comment('CAMPO DE TEXTO ENTIDAD');
            $table->longText('observacio2')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('anteocupaci')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('anteotiempo')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('prospeccion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('obsefamilia')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('osexualidad')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('conceptoocu')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');

            $table = CamposMagicos::h_magicos($table);
        });

        Schema::create($this->tablaxxx1, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('entrevista_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->integer('prm_area_id')->unsigned()->comment("AREA DE MEJORA");
            $table = CamposMagicos::h_magicos($table);
        });

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('entrevista_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->integer('area_id')->unsigned()->comment("REMITIR AREA INTRA");
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
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx1);
        Schema::dropIfExists($this->tablaxxx);
    }
}
