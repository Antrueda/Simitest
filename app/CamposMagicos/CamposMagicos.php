<?php

namespace App\CamposMagicos;

class CamposMagicos
{

    private static function armarCampo($tablaxxx,$campoxxx){
        if (!$tablaxxx) {
            $tablaxxx = $campoxxx . 's';
            $campoxxx = $campoxxx . '_id';
        }
        return [$tablaxxx,$campoxxx];
    }

    /**
     *  
     * Crea la relacion entre tablas recibiendo el nombre de las tablas y del campo
     *
     * @return void
     */
    public static function getForeign($table, $campoxxx, $tablaxxx = false)
    {
        $c=CamposMagicos::armarCampo($tablaxxx,$campoxxx);
        $table->bigInteger($c[1])->unsigned();
        $table->foreign($c[1])->references('id')->on($c[0]);
        return $table;
    }

    public static function magicos($table)
    {
        $table->bigInteger('user_crea_id')->unsigned()->default(1);
        $table->bigInteger('user_edita_id')->unsigned()->default(1);
        $table->bigInteger('sis_esta_id')->unsigned()->default(1);
        $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
        $table->foreign('user_crea_id')->references('id')->on('users');
        $table->foreign('user_edita_id')->references('id')->on('users');
        $table->timestamps();
        $table->softDeletes();
        return $table;
    }

    /**
     *  
     * Definición de los campos por defecto estaran en las tablas H y tendrán  la trazabilidad de los registros
     *
     * @return void
     */
    public static function h_magicos($table)
    {
        $table->bigInteger('id_old');    // campo nuevo
        $table->integer('user_crea_id');
        $table->integer('user_edita_id');
        $table->integer('sis_esta_id');
        $table->string('metodoxx');     // campo nuevo
        $table->string('rutaxxxx');     // campo nuevo
        $table->string('ipxxxxxx');     // campo nuevo
        $table->timestamps();
        $table->softDeletes();
        return $table;
    }
}