<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiViolenciasTable extends Migration
{
    private $tablaxxx = 'fi_violencias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_presenta_violencia_id')->unsigned(); //->comment('FI 12.1 PRESENTA ALGÚN TIPO DE VIOLENCIA');

            $table->bigInteger('i_prm_familiar_fisica_id')->nullable()->unsigned(); //->comment('FI FAMILIAR FISICA');
            $table->bigInteger('i_prm_amistad_fisica_id')->nullable()->unsigned(); //->comment('FI AMISTAD FISICA');
            $table->bigInteger('i_prm_pareja_fisica_id')->nullable()->unsigned(); //->comment('FI PAREJA FISICA');
            $table->bigInteger('i_prm_comunidad_fisica_id')->nullable()->unsigned(); //->comment('FI COMUNIDAD FISICA');

            $table->bigInteger('i_prm_familiar_psico_id')->nullable()->unsigned(); //->comment('FI FAMILIAR PSICOLOGICA');
            $table->bigInteger('i_prm_amistad_psico_id')->nullable()->unsigned(); //->comment('FI AMISTAD PSICOLOGICA');
            $table->bigInteger('i_prm_pareja_psico_id')->nullable()->unsigned(); //->comment('FI PAREJA PSICOLOGICA');
            $table->bigInteger('i_prm_comunidad_psico_id')->nullable()->unsigned(); //->comment('FI COMUNIDAD PSICOLOGICA');

            $table->bigInteger('i_prm_familiar_sexual_id')->nullable()->unsigned(); //->comment('FI FAMILIAR SEXUAL');
            $table->bigInteger('i_prm_amistad_sexual_id')->nullable()->unsigned(); //->comment('FI AMISTAD SEXUAL');
            $table->bigInteger('i_prm_pareja_sexual_id')->nullable()->unsigned(); //->comment('FI PAREJA SEXUAL');
            $table->bigInteger('i_prm_comunidad_sexual_id')->nullable()->unsigned(); //->comment('FI COMUNIDAD SEXUAL');

            $table->bigInteger('i_prm_familiar_econo_id')->nullable()->unsigned(); //->comment('FI FAMILIAR ECONOMICA');
            $table->bigInteger('i_prm_amistad_econo_id')->nullable()->unsigned(); //->comment('FI AMISTAD SEXUAL ECONOMICA');
            $table->bigInteger('i_prm_pareja_econo_id')->nullable()->unsigned(); //->comment('FI PAREJA SEXUAL ECONOMICA');
            $table->bigInteger('i_prm_comunidad_econo_id')->nullable()->unsigned(); //->comment('FI COMUNIDAD SEXUAL ECONOMICA');

            $table->bigInteger('i_prm_violencia_genero_id')->unsigned(); //->comment('FI 12.2 EL TIPO DE VIOLENCIA REFERENCIADO CORRESPONDE A VIOLENCIA BASADA EN GÉNERO/IDENTIDAD DE GÉNERO');
            $table->bigInteger('i_prm_condicion_presenta_id')->unsigned(); //->comment('FI 12.3 CONDICIÓN ESPECIAL PRESENTA');
            $table->bigInteger('i_prm_depto_condicion_id')->nullable()->unsigned(); //->comment('FI DEPARTAMENTO CONDICION ESPECIAL');
            $table->bigInteger('i_prm_municipio_condicion_id')->nullable()->unsigned(); //->comment('FI MUNICIPIO CONDICION ESPECIAL');
            $table->bigInteger('i_prm_tiene_certificado_id')->nullable()->unsigned(); //->comment('12.4 CUENTA CON CERTIFICADO');
            $table->bigInteger('i_prm_depto_certifica_id')->nullable()->unsigned(); //->comment('FI DEPARTAMENTO CERTIFICA CONDICION ESPECIAL');
            $table->bigInteger('i_prm_municipio_certifica_id')->nullable()->unsigned(); //->comment('FI MUNICIPIO CERTIFICA CONDICION ESPECIAL');

            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned(); //->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas'); //->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');

            $table->foreign('i_prm_presenta_violencia_id')->references('id')->on('parametros');
            $table->foreign('i_prm_familiar_fisica_id')->references('id')->on('parametros');
            $table->foreign('i_prm_amistad_fisica_id')->references('id')->on('parametros');
            $table->foreign('i_prm_pareja_fisica_id')->references('id')->on('parametros');
            $table->foreign('i_prm_comunidad_fisica_id')->references('id')->on('parametros');
            $table->foreign('i_prm_familiar_psico_id')->references('id')->on('parametros');
            $table->foreign('i_prm_amistad_psico_id')->references('id')->on('parametros');
            $table->foreign('i_prm_pareja_psico_id')->references('id')->on('parametros');
            $table->foreign('i_prm_comunidad_psico_id')->references('id')->on('parametros');
            $table->foreign('i_prm_familiar_sexual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_amistad_sexual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_pareja_sexual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_comunidad_sexual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_familiar_econo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_amistad_econo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_pareja_econo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_comunidad_econo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_violencia_genero_id')->references('id')->on('parametros');
            $table->foreign('i_prm_condicion_presenta_id')->references('id')->on('parametros');
            $table->foreign('i_prm_depto_condicion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_municipio_condicion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tiene_certificado_id')->references('id')->on('parametros');
            $table->foreign('i_prm_depto_certifica_id')->references('id')->on('parametros');
            $table->foreign('i_prm_municipio_certifica_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA DETALLES SOBRE LA VIOLENCIA EXPERIMENTADA POR LA PERSONA ENTREVISTADA.'");
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
