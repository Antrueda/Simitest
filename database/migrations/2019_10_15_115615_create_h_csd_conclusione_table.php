<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdConclusioneTable extends Migration
{
    private $tablaxxx = 'h_csd_conclusiones';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->string('conclusiones')->comment('CAMPO DE TEXTO DE CONCLUSIONES');
            $table->string('persona_nombre')->comment('CAMPO DE TEXTO DEL NOMBRE DE LA PERSONA QUE SE LE HIZO LA CONSULTA');
            $table->string('persona_doc')->comment('CAMPO DE TEXTO DEL DOCUMENTO DE LA PERSONA QUE SE LE HIZO LA CONSULTA');
            $table->integer('persona_parent_id')->unsigned()->comment('PARAMETRO DEL PARENTESCO');
            $table->integer('user_doc1_id')->unsigned()->comment('ID DE LA PERSONA QUE DILIGENCIO LA CONSULTA');
            $table->integer('user_doc2_id')->unsigned()->nullable()->comment('ID DE LA SEGUNDA PERSONA QUE DILIGENCIO LA CONSULTA');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
