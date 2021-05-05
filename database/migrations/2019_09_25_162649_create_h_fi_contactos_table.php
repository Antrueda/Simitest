<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiContactosTable extends Migration
{
    private $tablaxxx = 'h_fi_contactos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_tipo_contacto_id')->unsigned()->comment('CAMPO TIPO DE CONTACTO');
            $table->string('s_contacto_condicion')->nullable()->comment('CAMPO ABIERTO CONTACTO POR CONDICION');
            $table->integer('i_prm_contacto_opcion_id')->nullable()->unsigned()->comment('CAMPO CONTACTO POR OPCION ');
            $table->string('s_entidad_remite')->nullable()->comment('CAMPO ENTIDAD QUE REMITE');
            $table->date('d_fecha_remite_id')->nullable()->comment('CAMPO FECHA QUE REMITE');
            $table->integer('i_prm_motivo_contacto_id')->nullable()->unsigned()->comment('CAMPO MOTIVO DE CONTACTO');
            $table->integer('i_prm_aut_tratamiento_id')->unsigned()->comment('CAMPO AUTORIZA AL IDIPRON');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
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