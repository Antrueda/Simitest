<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNnajUpisTable extends Migration
{

    private $tablaxxx = 'nnaj_upis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table = CamposMagicos::getForeignFk($table, 'sis_depen','nnup_pk1');
            $table = CamposMagicos::getForeignFk($table, 'prm_principa_id','nnup_pk2','parametros');
            $table = CamposMagicos::getForeignFk($table, 'sis_nnaj','nnup_pk3');
            $table->unique(['sis_depen_id','sis_nnaj_id'],'nnup_un1');
            $table = CamposMagicos::magicosFk($table,['nnup_pk',4,5,6]);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA UPI DEL NNAJ.'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->Integer('sis_depen_id');
            $table->Integer('sis_nnaj_id');
            $table->integer('prm_principa_id')->unsigned();
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA  {$this->tablaxxx}'");
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
