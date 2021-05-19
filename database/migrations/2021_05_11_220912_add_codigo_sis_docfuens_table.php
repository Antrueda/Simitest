<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodigoSisDocfuensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sis_docfuens', function (Blueprint $table) {
           $table->string('codigo_doc')->nullable()->comments('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sis_docfuens', function (Blueprint $table) {
            $table->dropColumn('codigo_doc');
        });
    }
}
