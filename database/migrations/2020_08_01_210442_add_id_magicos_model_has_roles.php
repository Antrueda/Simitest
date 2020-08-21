<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddIdMagicosModelHasRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('model_has_roles', function ($table) {
            $table = CamposMagicos::magicos($table);
        });
        DB::statement('ALTER Table model_has_roles add id INTEGER NOT NULL UNIQUE AUTO_INCREMENT FIRST;');     //servira para darle orden entre otros atributos al campo
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}