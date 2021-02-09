<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHAiSalidaMenoresTable extends Migration
{
    private $tablaxxx = 'h_ai_salida_menores';
    private $tablaxxx2 = 'h_ai_salida_menores_obj';
    private $tablaxxx3 = 'h_ai_salida_menores_con';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('prm_upi_id')->unsigned();
            $table->date('fecha');
            $table->time('hora_salida');
            $table->string('primer_apellido', 120);
            $table->string('segundo_apellido', 120)->nullable();
            $table->string('primer_nombre', 120);
            $table->string('segundo_nombre', 120)->nullable();
            $table->integer('prm_doc_id')->unsigned();
            $table->string('documento', 10);
            $table->integer('prm_parentezco_id')->unsigned();
            $table->integer('prm_autorizado_id')->unsigned();
            $table->string('ape1_autorizado', 120)->nullable();
            $table->string('ape2_autorizado', 120)->nullable();
            $table->string('nom1_autorizado', 120)->nullable();
            $table->string('nom2_autorizado', 120)->nullable();
            $table->integer('prm_doc2_id')->unsigned()->nullable();
            $table->string('doc_autorizado', 10)->nullable();
            $table->integer('prm_parentezco2_id')->unsigned()->nullable();
            $table->integer('prm_carta_id')->unsigned()->nullable();
            $table->integer('prm_copiaDoc_id')->unsigned()->nullable();
            $table->integer('prm_copiaDoc2_id')->unsigned()->nullable();
            $table->longText('descripcion');
            $table->longText('objetos');
            $table->integer('prm_upi2_id')->unsigned();
            $table->Integer('tiempo');
            $table->string('novedad', 120)->nullable();
            $table->string('dir_salida', 120);
            $table->string('tel_contacto', 10);
            $table->longText('causa')->nullable();
            $table->string('nombres_recoge', 120);
            $table->string('doc_recoge', 120);
            $table->integer('responsable')->unsigned();
            $table->integer('user_doc1_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->integer('parametro_id')->unsigned();
            $table->integer('ai_salida_menores_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_condicion_id')->unsigned();
            $table->integer('prm_orientado_id')->unsigned();
            $table->integer('prm_enfermerd_id')->unsigned();
            $table->integer('prm_brotes_id')->unsigned();
            $table->integer('prm_laceracio_id')->unsigned();
            $table->integer('ai_salida_menores_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
