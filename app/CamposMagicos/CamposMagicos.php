<?php

namespace App\CamposMagicos;

use Illuminate\Support\Facades\DB;

class CamposMagicos
{
    private static function armarCampo($tablaxxx, $campoxxx)
    {
        if (!$tablaxxx) {
            $tablaxxx = $campoxxx . 's';
            $campoxxx = $campoxxx . '_id';
        }
        return [$tablaxxx, $campoxxx];
    }

    /**
     *
     * Crea la relacion entre tablas recibiendo el nombre de las tablas y del campo sin nulo
     *
     * @return $table
     */
    public static function getForeign($table, $campoxxx, $tablaxxx = false)
    {
        $c = CamposMagicos::armarCampo($tablaxxx, $campoxxx);
        $table->integer($c[1])->unsigned();
        $table->foreign($c[1])->references('id')->on($c[0]);
        return $table;
    }
    public static function getForeignull($table, $campoxxx, $tablaxxx = false)
    {
        $c = CamposMagicos::armarCampo($tablaxxx, $campoxxx);
        $table->integer($c[1])->unsigned()->nullable();
        $table->foreign($c[1])->references('id')->on($c[0]);
        return $table;
    }
    public static function getForeignFk($table, $campoxxx, $pk,$tablaxxx = false)
    {
        $c = CamposMagicos::armarCampo($tablaxxx, $campoxxx);
        $table->integer($c[1])->unsigned();
        $table->foreign($c[1],$pk)->references('id')->on($c[0]);
        return $table;
    }

    public static function getForeignFkNull($table, $campoxxx, $pk,$tablaxxx = false)
    {
        $c = CamposMagicos::armarCampo($tablaxxx, $campoxxx);
        $table->integer($c[1])->nullable()->unsigned();
        $table->foreign($c[1],$pk)->references('id')->on($c[0]);
        return $table;
    }

    public static function getForeigDefault($table, $campoxxx, $default, $tablaxxx = false)
    {
        $c = CamposMagicos::armarCampo($tablaxxx, $campoxxx);
        $table->integer($c[1])->default($default)->unsigned();
        $table->foreign($c[1])->references('id')->on($c[0]);
        return $table;
    }
    /**
     *
     * Crea la relacion entre tablas recibiendo el nombre de las tablas y del campo con nulo
     *
     * @return $table
     */
    public static function getForeignN($table, $campoxxx, $tablaxxx = false)
    {
        $c = CamposMagicos::armarCampo($tablaxxx, $campoxxx);
        $table->integer($c[1])->unsigned()->nullable();
        $table->foreign($c[1])->references('id')->on($c[0]);
        return $table;
    }

    public static function magicos($table)
    {
        $table->integer('user_crea_id')->unsigned()->default(1)->comment('USUARIO QUE CREAR EL REGISTRO');
        $table->integer('user_edita_id')->unsigned()->default(1)->comment('USUARIO QUE EDITA EL REGISTRO');
        $table->integer('sis_esta_id')->unsigned()->default(1)->comment('ESTADO DEL REGISTRO');
        $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
        $table->foreign('user_crea_id')->references('id')->on('users');
        $table->foreign('user_edita_id')->references('id')->on('users');
        $table->timestamps();
        $table->softDeletes();
        return $table;
    }


    public static function magicosFk($table,$pk)
    {
        $table->integer('user_crea_id')->unsigned()->default(1)->comment('USUARIO QUE CREAR EL REGISTRO');
        $table->integer('user_edita_id')->unsigned()->default(1)->comment('USUARIO QUE EDITA EL REGISTRO');
        $table->integer('sis_esta_id')->unsigned()->default(1)->comment('ESTADO DEL REGISTRO');
        $table->foreign('sis_esta_id',$pk[0].'_fk1')->references('id')->on('sis_estas');
        $table->foreign('user_crea_id',$pk[0].'_fk2')->references('id')->on('users');
        $table->foreign('user_edita_id',$pk[0].'_fk3')->references('id')->on('users');
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
        $table->integer('id_old');    // campo nuevo
        $table->integer('user_crea_id');
        $table->integer('user_edita_id');
        $table->integer('sis_esta_id');
        $table->string('metodoxx',70);     // campo nuevo
        $table->string('rutaxxxx',70);     // campo nuevo
        $table->string('ipxxxxxx',70);     // campo nuevo
        $table->timestamps();
        $table->softDeletes();
        return $table;
    }

    public static function h_magicoss($table)
    {
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

    public static function setComentarios($dataxxxx)
    {
        $comentar="COMMENT ON TABLE ";
        $comentar.="'".$dataxxxx['tablaxxx']."' IS ";
        $comentar.="'TABLA QUE ALMACENA' " ;
        //  \'TABLA QUE ALMACENA\''. $dataxxxx["comentar"].'\';'
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
    //   DB::statement("COMMENT ON TABLE H_SIS_NNAJS  IS 'ACTIVIDAD_FAMILIA'");

    }
}
