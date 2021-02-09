<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdDinFamiliarsTable extends Migration
{
    private $tablaxxx = 'h_csd_din_familiars';
    private $tablaxxx2 = 'h_csd_dinfam_antecedente';
    private $tablaxxx3 = 'h_csd_dinfam_problema';
    private $tablaxxx4 = 'h_csd_dinfam_norma';
    private $tablaxxx5 = 'h_csd_dinfam_establecen';
    private $tablaxxx6 = 'h_csd_dinfam_incumple';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned();
            $table->longText('descripcion')->nullable();
            $table->longText('relevantes');
            $table->string('s_doc_adjunto', 150)->nullable();
            $table->integer('prm_familiar_id')->nullable()->unsigned();
            $table->integer('prm_hogar_id')->nullable()->unsigned();
            $table->longText('descripciona');
            $table->integer('prm_bogota_id')->unsigned();
            $table->integer('prm_traslado_id')->unsigned()->nullable();
            $table->string('jefea')->nullable();
            $table->integer('prm_jefea_id')->unsigned()->nullable();
            $table->string('jefeb')->nullable();
            $table->integer('prm_jefeb_id')->unsigned()->nullable();
            $table->longText('descripcionb');
            $table->integer('prm_cuidador_id')->unsigned()->nullable();
            $table->longText('descripcionc');
            $table->longText('afronta');
            $table->integer('prm_norma_id')->unsigned();
            $table->integer('prm_conoce_id')->unsigned()->nullable();
            $table->longText('observacion')->nullable();
            $table->integer('prm_actuan_id')->unsigned()->nullable();
            $table->string('porque')->nullable();
            $table->integer('prm_solucion_id')->unsigned();
            $table->integer('prm_problema_id')->unsigned();
            $table->integer('prm_destaca_id')->unsigned();
            $table->integer('prm_positivo_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned();
            $table->integer('csd_dinfamiliar_id')->unsigned();
            $table->integer('prm_tipofuen_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
