<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosVsiSeeder extends Seeder
{

    public function getPermisos($dataxxxx)
    {
        $listaxxx = 'Permiso que permite ver el contenido para: ';

        $descripc = [
            'leer' => $listaxxx,
            'crear' => 'Permiso que permite crear registro para: ',
            'editar' => 'Permiso que permite editar registro para: ',
            'borrar' => 'Permiso que permite inactivar registro para: ',
            'factorxx' => 'Permioso que permite ver los: ',
            'metaxxxx' => 'Permioso que permite ver las: ',
            'activarx' => 'Permiso que permite activar registro para: '
        ];
        foreach ($dataxxxx['permisos'] as $value) {
            Permission::create([
                'name' => $dataxxxx['permisox'] . '-' . $value,
                'sis_pestania_id' => $dataxxxx['pestania'],
                'descripcion' => $descripc[$value] . $dataxxxx['compleme'],
                'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
            ]);
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * permisos para VSI
         */
        $this->getPermisos(['permisox' => 'vsinnajs', 'permisos' => ['leer'], 'compleme' => 'NNAJ de valoracion sicosocial', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'vsixxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Valoracion Sicosocial', 'pestania' => 1]);

        //Crear areas para VSI datos básicos
        $this->getPermisos(['permisox' => 'vsidabas', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Datos Básicos VSI', 'pestania' => 1]);

        //Crear areas para VSI razones datos básicos
        $this->getPermisos(['permisox' => 'vsidatbi', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Razones de Datos Basicos de VSI', 'pestania' => 1]);

        //Crear areas para VSI bienvenida
        $this->getPermisos(['permisox' => 'vsibienv', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Motivos de Viculación y Bienvenida de VSI', 'pestania' => 1]);

        //Crear areas para VSI violencia
        $this->getPermisos(['permisox' => 'vsiviole', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Violenciass y Condición Especial VSI', 'pestania' => 1]);

        //Crear areas para VSI violencia
        $this->getPermisos(['permisox' => 'vsitipov', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Tipo de Violencia', 'pestania' => 1]);


        //Crear areas para VSI educación
        $this->getPermisos(['permisox' => 'vsieduca', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Educación VSI', 'pestania' => 1]);

        //Crear areas para VSI relaciones sociales
        $this->getPermisos(['permisox' => 'vsirelac', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Relasiones Sociales VSI', 'pestania' => 1]);

        //Crear areas para VSI salud
        $this->getPermisos(['permisox' => 'vsisalud', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Antecedentes de Salud VSI', 'pestania' => 1]);

        //Crear areas para VSI Dinámica Familiar
        $this->getPermisos(['permisox' => 'vsidinam', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Dinámica Familiar VSI', 'pestania' => 1]);

        //Crear areas para VSI Dinámica Familiar padre
        $this->getPermisos(['permisox' => 'vsidfpad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar Padre VSI', 'pestania' => 1]);

        //Crear areas para VSI Dinámica Familiar madre
        $this->getPermisos(['permisox' => 'vsidfmad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar Madre VSI', 'pestania' => 1]);

        //Crear areas para VSI Relación Familiar
        $this->getPermisos(['permisox' => 'vsirefam', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Relaciones Familiares VSI', 'pestania' => 1]);

        //Crear areas para VSI Antecedentes
        $this->getPermisos(['permisox' => 'vsiantec', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Antecedentes VSI', 'pestania' => 1]);

        //Crear areas para VSI Generación de Ingresos
        $this->getPermisos(['permisox' => 'vsigener', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Generación de Ingresos VSI', 'pestania' => 1]);

        //Crear areas para VSI Presunto Abuso Sexual
        $this->getPermisos(['permisox' => 'vsiabuso', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Presunto Abuso Sexual VSI', 'pestania' => 1]);

        //Crear areas para VSI Redes Sociales y Apoyo
        $this->getPermisos(['permisox' => 'vsiredes', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Redes Sociales de Apoyo VSI', 'pestania' => 1]);

        //Crear areas para VSI Redes Sociales y Apoyo actuales
        $this->getPermisos(['permisox' => 'vsiredac', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes Sociales de Apoyo actuales VSI', 'pestania' => 1]);

        //Crear areas para VSI Redes Sociales y Apoyo antecedentes institucionales
        $this->getPermisos(['permisox' => 'vsiredpa', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes Sociales de Apoyo Antecedentes Institucionales VSI', 'pestania' => 1]);

        //Crear areas para VSI Situación Especial y ESCNNA
        $this->getPermisos(['permisox' => 'vsisitua', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Situación Especial y ESCNNA VSI', 'pestania' => 1]);

        //Crear areas para VSI Activación emocional
        $this->getPermisos(['permisox' => 'vsiactiv', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Activación Emosional VSI', 'pestania' => 1]);

        //Crear areas para VSI Estado emocional
        $this->getPermisos(['permisox' => 'vsiemoci', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Estado Emosional VSI', 'pestania' => 1]);

        //Crear areas para VSI Consumo de Sustancias Psicoactivas
        $this->getPermisos(['permisox' => 'vsiconsu', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Consumo de Sustacias Sicoactivas VSI', 'pestania' => 1]);

        //Crear areas para VSI Factores
        $this->getPermisos(['permisox' => 'vsifacto', 'permisos' => ['factorxx'], 'compleme' => 'Factores de VSI', 'pestania' => 1]);

        //Crear areas para VSI Factores protector
        $this->getPermisos(['permisox' => 'vsifacpr', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Factor Protector VSI', 'pestania' => 1]);

        //Crear areas para VSI Factores riesgo
        $this->getPermisos(['permisox' => 'vsifacri', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Factor Riesgo VSI', 'pestania' => 1]);

        //Crear areas para VSI Potencialidades y metas
        $this->getPermisos(['permisox' => 'vsimetas', 'permisos' => ['metaxxxx'], 'compleme' => 'Pencialidades y Metas VSI', 'pestania' => 1]);

        //Crear areas para VSI Potencialidades
        $this->getPermisos(['permisox' => 'vsimetpo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Potencialidades VSI', 'pestania' => 1]);

        //Crear areas para VSI metas
        $this->getPermisos(['permisox' => 'vsimetme', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Metas VSI', 'pestania' => 1]);

        //Crear areas para VSI Áreas de ajuste sicosocial
        $this->getPermisos(['permisox' => 'vsiareas', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Areas de Ajuste Sicosocial VSI', 'pestania' => 1]);

        //Crear areas para VSI concepto
        $this->getPermisos(['permisox' => 'vsisocia', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Impresión Diagnóstica y Análisis Social VSI', 'pestania' => 1]);

        //Crear areas para VSI consentimiento
        $this->getPermisos(['permisox' => 'vsiconse', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Consentimiento Informado VSI', 'pestania' => 1]);

    }
}
