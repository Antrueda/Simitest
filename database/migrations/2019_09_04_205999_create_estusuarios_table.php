<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEstusuariosTable extends Migration
{
    private $tablaxxx = 'estusuarios';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('estado', 150)->comment('CAMPO NOMBRE DEL ESTADO');
            $table->integer('prm_formular_id')->unsigned()->comment('FORMULARIO AL QUE SE LE VA ASIGNAR EL MOTIVO DEL ESTADO');
<<<<<<< HEAD
=======
            
>>>>>>> jorge
            $table->integer('user_crea_id')->unsigned()->default(1);
            $table->integer('user_edita_id')->unsigned()->default(1);
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('prm_formular_id')->references('id')->on('parametros');
            $table->timestamps();
            $table->softDeletes();
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS ESTADOS PARA LOS USUARIOS'");

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->string('estado', 150);
            $table->integer('prm_formular_id')->unsigned()->comment('FORMULARIO AL QUE SE LE VA ASIGNAR EL MOTIVO DEL ESTADO');
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
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
