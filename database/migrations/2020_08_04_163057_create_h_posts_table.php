<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHPostsTable extends Migration
{
    private $tablaxxx = 'h_posts';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion',4000);
            $table->integer('user_id')->unsigned()->default(1);
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
