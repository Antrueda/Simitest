<?php
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;


class PermisosFpOcupacionalSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
         $descripc = [
            'leer' => 'Permiso que permite ver el contenido para: ',
            'crear' => 'Permiso que permite crear registro para: ',
            'editar' => 'Permiso que permite editar registro para: ',
            'borrar' => 'Permiso que permite inactivar registro para: ',
            'activar' => 'Permiso que permite activar registro para: '
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

        Permission::create([
            'name' => 'perfilocupacional-modulo',
            'sis_pestania_id' => 1,
            'descripcion' => 'permiso menu administraccion modulo de FPO formato perfil ocupacional',
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);
        //permisos para el crud de cague de documentos
        $this->getPermisos([
            'permisox' => 'perfilocupacionalcomponentes',
            'permisos' => [
                'leer',
                'crear',
                'editar',
                'borrar',
                'activar'
            ],
            'compleme' => 'FPO administración componentes de desempeño',
            'pestania' => 1
        ]);

        $this->getPermisos([
            'permisox' => 'perfilocupacionalcategorias',
            'permisos' => [
                'leer',
                'crear',
                'editar',
                'borrar',
                'activar'
            ],
            'compleme' => 'FPO administración categorias componentes',
            'pestania' => 1
        ]);

        $this->getPermisos([
            'permisox' => 'perfilocupacionalitems',
            'permisos' => [
                'leer',
                'crear',
                'editar',
                'borrar',
                'activar'
            ],
            'compleme' => 'FPO administración componentes items a evaluar',
            'pestania' => 1
        ]);

        $this->getPermisos([
            'permisox' => 'fpoaplicacion',
            'permisos' => [
                'leer',
                'crear',
                'editar',
                'borrar',
            ],
            'compleme' => 'FPO aplicacion formato perfil ocupacional a nnaj',
            'pestania' => 1
        ]);
    }
}
