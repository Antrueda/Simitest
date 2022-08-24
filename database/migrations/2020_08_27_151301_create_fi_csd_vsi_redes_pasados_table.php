<?php
use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiCsdVsiRedesPasadosTable extends Migration
{
    private $tablaxxx = 'fi_csd_vsi_redes_pasados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre');
            $table->string('servicios', 120);
            $table->integer('cantidad')->nullable();
            $table->integer('prm_unidad_id')->unsigned();
            $table->integer('ano');
            $table->string('retiro')->nullable();
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS ANTECECENTES INSTITUCIONES DEL NNAJ PARA FI CSD Y VSI'");

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
