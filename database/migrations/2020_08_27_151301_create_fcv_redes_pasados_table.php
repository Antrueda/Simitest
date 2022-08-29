<?php
use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcvRedesPasadosTable extends Migration
{
    private $tablaxxx = 'fcv_redes_pasados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_csd_vsi_redp_id')->unsigned();
            $table->string('nombre')->comment('CAMPO DE TEXTO NOMBRE');
            $table->string('servicios', 120)->comment('CAMPO DE TEXTO SERVICIO');
            $table->integer('cantidad')->nullable()->comment('CAMPO DE NUMERICO DE CANTIDAD');
            $table->integer('prm_unidad_id')->unsigned()->comment('CAMPO PARAMETRO UNIDAD DE TIEMPO');
            $table->integer('ano')->comment('CAMPO AÑO');
            $table->string('retiro')->nullable()->comment('CAMPO DE TEXTO RETIRO');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
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
