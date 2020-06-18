<?php

use App\Traits\Db\DbTrait;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

class CreateMitVspaTablaTable extends Migration
{
    use  DbTrait;
    private $tablaxxx = 'mit_vspa_tabla';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mit_vspa_id')->unsigned();

            $table->bigInteger('prm_droga_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_ini_id')->unsigned()->nullable();
            $table->Integer('primera_ini')->nullable();
            $table->bigInteger('prm_mes_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_ini_id')->unsigned()->nullable();
            $table->Integer('ultima_ini')->nullable();
            $table->bigInteger('prm_imp_ini_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_dos_id')->unsigned()->nullable();
            $table->Integer('primera_dos')->nullable();
            $table->bigInteger('prm_mes_dos_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_dos_id')->unsigned()->nullable();
            $table->Integer('ultima_dos')->nullable();
            $table->bigInteger('prm_imp_dos_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_tres_id')->unsigned()->nullable();
            $table->Integer('primera_tres')->nullable();
            $table->bigInteger('prm_mes_tres_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_tres_id')->unsigned()->nullable();
            $table->Integer('ultima_tres')->nullable();
            $table->bigInteger('prm_imp_tres_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_cuatro_id')->unsigned()->nullable();
            $table->Integer('primera_cuatro')->nullable();
            $table->bigInteger('prm_mes_cuatro_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_cuatro_id')->unsigned()->nullable();
            $table->Integer('ultima_cuatro')->nullable();
            $table->bigInteger('prm_imp_cuatro_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_cinco_id')->unsigned()->nullable();
            $table->Integer('primera_cinco')->nullable();
            $table->bigInteger('prm_mes_cinco_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_cinco_id')->unsigned()->nullable();
            $table->Integer('ultima_cinco')->nullable();
            $table->bigInteger('prm_imp_cinco_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_seis_id')->unsigned()->nullable();
            $table->Integer('primera_seis')->nullable();
            $table->bigInteger('prm_mes_seis_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_seis_id')->unsigned()->nullable();
            $table->Integer('ultima_seis')->nullable();
            $table->bigInteger('prm_imp_seis_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_siete_id')->unsigned()->nullable();
            $table->Integer('primera_siete')->nullable();
            $table->bigInteger('prm_mes_siete_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_siete_id')->unsigned()->nullable();
            $table->Integer('ultima_siete')->nullable();
            $table->bigInteger('prm_imp_siete_id')->unsigned()->nullable();

            $table->bigInteger('prm_droga_dmi_id')->unsigned()->nullable();
            $table->bigInteger('prm_fre_dmi_id')->unsigned()->nullable();
            $table->bigInteger('prm_via_dmi_id')->unsigned()->nullable();
            $table->Integer('primera_dmi')->nullable();
            $table->bigInteger('prm_mes_dmi_id')->unsigned()->nullable();
            $table->bigInteger('prm_anio_dmi_id')->unsigned()->nullable();
            $table->Integer('ultima_dmi')->nullable();
            $table->bigInteger('prm_imp_dmi_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('prm_droga_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_droga_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_fre_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_via_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_via_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_via_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_via_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_via_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_via_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_via_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_via_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_mes_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_anio_dmi_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_dos_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_tres_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_cuatro_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_cinco_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_seis_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_siete_id')->references('id')->on('parametros');
            $table->foreign('prm_imp_dmi_id')->references('id')->on('parametros');
            $table->foreign('mit_vspa_id')->references('id')->on('mit_vspa');
            $table->unique(['id', 'mit_vspa_id']);

        });
        $comments = "TABLA 1 DEL VESPA";
        $this->getCommentTable($this->tablaxxx, '', $comments);
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
