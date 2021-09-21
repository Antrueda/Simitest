<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiDinFamiliarsTable extends Migration
{
    private $tablaxxx = 'h_vsi_din_familiars';
    private $tablaxxx2 = 'h_vsi_dinfam_calle';
    private $tablaxxx3 = 'h_vsi_dinfam_delito';
    private $tablaxxx4 = 'h_vsi_dinfam_prostitucion';
    private $tablaxxx5 = 'h_vsi_dinfam_libertad';
    private $tablaxxx6 = 'h_vsi_dinfam_consumo';
    private $tablaxxx7 = 'h_vsi_dinfam_salud';
    private $tablaxxx8 = 'h_vsi_dinfam_cuidador';
    private $tablaxxx9 = 'h_vsi_dinfam_ausencia';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->integer('prm_familiar_id')->nullable()->unsigned()->comment('TIPOLOGIA FAMILIAR');
            $table->integer('prm_hogar_id')->nullable()->unsigned()->comment('TIPOLOGIA DEL HOGAR');
            $table->string('lugar')->nullable()->comment('DESCRIPCION DEL LUGAR');
            $table->integer('prm_motivo_id')->unsigned()->nullable();
            $table->string('s_doc_adjunto', 150)->nullable()->comment('CAMPO DATO ADJUNTO, GENOGRAMA');
            $table->string('descripcion')->comment('DESCRIPCION DE LA COMPOSICION FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA FAMILIARES CON ANTECEDENTES EN HABITABILIDAD EN CALLE');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA FAMILIARES CON ANTECEDENTES EN CONDUCTAS DELICTIVAS');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA FAMILIARES CON ANTECEDENTES EN PROSTITUCION');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA FAMILIARES CON ANTECEDENTES EN PRIVACION DE LA LIBERTAD');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA FAMILIARES CON ANTECEDENTES EN CONSUMO DE SPA');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA FAMILIARES CON ANTECEDENTES EN SALUD MENTAL');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx7}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx7}'");

        Schema::create($this->tablaxxx8, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA FAMILIARES QUE ASUMEN CUIDADO DE MENORES DE 18 AÑOS');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx8}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx8}'");

        Schema::create($this->tablaxxx9, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO QUE ALMACENA MOTIVOS DE LA AUSENCIA DE REPRESENTANTES LEGALES');
            $table->integer('vsi_dinfamiliar_id')->unsigned()->comment('CAMPO ID DINAMICA FAMILIAR');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx9}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx9}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx9);
        Schema::dropIfExists($this->tablaxxx8);
        Schema::dropIfExists($this->tablaxxx7);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
