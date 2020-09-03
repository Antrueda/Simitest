<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiCsdComposicionfamisTable extends Migration
{
    private $tablaxxx = 'fi_csd_comfams';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_parentesco_id')->unsigned();
            $table->string('s_primer_nombre');
            $table->string('s_segundo_nombre')->nullable();
            $table->string('s_primer_apellido');
            $table->string('s_segundo_apellido')->nullable();
            $table->string('s_nombre_identitario')->nullable();
            $table->string('s_documento')->unique();
            $table->date('d_nacimiento');
            $table->bigInteger('i_prm_vinculado_idipron_id')->unsigned();
            $table->bigInteger('i_prm_convive_nnaj_id')->unsigned();
            $table->bigInteger('prm_documento_id')->unsigned();
            $table->bigInteger('nnaj_nfamili_id')->unsigned()->comment('NUCLEO FAMILIAR DEL NNAJ');
            $table->foreign('i_prm_parentesco_id')->references('id')->on('parametros');
            $table->foreign('prm_documento_id')->references('id')->on('parametros');
            $table->foreign('i_prm_vinculado_idipron_id')->references('id')->on('parametros');
            $table->foreign('i_prm_convive_nnaj_id')->references('id')->on('parametros');
            $table->foreign('nnaj_nfamili_id')->references('id')->on('nnaj_nfamilis');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA COMPOSICION FAMILIAR DEL NNAJ PARA FI CSD'");
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
