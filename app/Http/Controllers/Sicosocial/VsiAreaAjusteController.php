<?php

namespace App\Http\Controllers\Sicosocial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vsi\VsiAreaAjusteCrearRequest;
use App\Http\Requests\Vsi\VsiAreaAjusteEditarRequest;

use App\Models\Sistema\SisEsta;
use App\Traits\Vsi\VsiTrait;
use App\Models\sicosocial\Vsi;
use App\Models\Tema;
use App\Models\User;
use App\Traits\Puede\PuedeTrait;
use Illuminate\Support\Facades\Auth;

class VsiAreaAjusteController extends Controller
{
    use VsiTrait;
    use PuedeTrait;
    private $opciones;

    public function __construct()
    {
        $this->opciones = [
            'pestpadr' => 3, // true indica si solo muestra la pestaña dependencias false muestra la pestaña padre y las hijas
            'permisox' => 'vsiareas',
            'parametr' => [],
            'rutacarp' => 'Sicosocial.',
            'tituloxx' => 'ÁREAS DE AJUSTE SICOSOCIAL',
            'carpetax' => 'Areajuste',
            'slotxxxx' => 'vsiareas',
            'tablaxxx' => 'datatable',
            'indecrea' => false, // false muestra las pestañas
            'esindexx' => false,
            'tituhead' => '',
            'fechcrea' => '',
            'fechedit' => '',
            'usercrea' => '',
            'useredit' => '',
            'conperfi' => '', // indica si la vista va a tener perfil
            'usuariox' => [],

            'confirmx' => 'Desea inactivar la vsi: ',
            'reconfir' => 'Realmente desea inactivar la vsi: ',
            'msnxxxxx' => 'No se puedo inactivar la vsi',
            'rutaxxxx' => 'vsiareas',
            'routnuev' => 'vsiareas',
            'routxxxx' => 'vsiareas',
        ];

        $this->middleware(['permission:'
            . $this->opciones['permisox'] . '-crear|'
            . $this->opciones['permisox'] . '-editar']);
    }

    private function view($dataxxxx)
    {

        $this->opciones['areajust']='nuevo'; 
        $this->opciones['vsixxxxx'] = $dataxxxx['padrexxx'];
        
        $this->opciones['emociona'] = Tema::comboAsc(162, false, false);
        $this->opciones['sexuales'] = Tema::comboAsc(163, false, false);
        $this->opciones['comporta'] = Tema::comboAsc(164, false, false);
        $this->opciones['academic'] = Tema::comboAsc(165, false, false);
        $this->opciones['sociales'] = Tema::comboAsc(166, false, false);
        $this->opciones['familiar'] = Tema::comboAsc(167, false, false);
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico;
        $this->opciones['tituhead'] = $dataxxxx['padrexxx']->nnaj->fi_datos_basico->name;
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['accionxx'] = $dataxxxx['accionxx'];
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['areajust']='editar'; 
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['pestpadr'] = 3;
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
        }

        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Vsi $padrexxx)
    {
        $this->opciones['parametr'] = [$padrexxx->id];
        $this->opciones['botoform'][] =
            [
                'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', [$padrexxx->id]],
                'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
            ];
        return $this->view(['modeloxx' => '', 'accionxx' => 'Crear', 'padrexxx' => $padrexxx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VsiAreaAjusteCrearRequest $request, Vsi $padrexxx)
    {
       $request->request->add(['vsi_id' => $padrexxx]);
       $request->request->add(['sis_esta_id'=> 1]);
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $padrexxx,
            'menssage' => 'Registro creado con éxito'
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vsi $objetoxx)
    {
        $this->opciones['padrexxx'] = $objetoxx->id;
        $this->opciones['parametr'] = [$objetoxx->id];


        if(Auth::user()->id==$objetoxx->user_crea_id||User::userAdmin()){
            if (auth()->user()->can($this->opciones['permisox'] . '-editar')) {
                $this->opciones['botoform'][] =
                    [
                        'mostrars' => true, 'accionxx' => 'GUARDAR', 'routingx' => [$this->opciones['routxxxx'] . '.editar', []],
                        'formhref' => 1, 'tituloxx' => '', 'clasexxx' => 'btn btn-sm btn-primary'
                    ];
                }
            }else{
                $this->opciones['botoform'][] =
                [
                    'mostrars' => false,
                ];
            }
        return $this->view(['modeloxx' => $objetoxx, 'accionxx' => 'Editar', 'padrexxx' => $objetoxx]);
    }

    private function grabar($dataxxxx)
    {

        if($dataxxxx['requestx']->emocionales){
            foreach ($dataxxxx['requestx']->emocionales as $d) {
                $dataxxxx['modeloxx']->emocionales()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
            }
        }
       
        if($dataxxxx['requestx']->sexuales){
            foreach ($dataxxxx['requestx']->sexuales as $d) {
                $dataxxxx['modeloxx']->sexuales()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
            }
        }
      
        if($dataxxxx['requestx']->comportamentales){
            foreach ($dataxxxx['requestx']->comportamentales as $d) {
                $dataxxxx['modeloxx']->comportamentales()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
            }
        }
      
        if($dataxxxx['requestx']->academicas){
            foreach ($dataxxxx['requestx']->academicas as $d) {
                $dataxxxx['modeloxx']->academicas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
            }
        }
        
        if($dataxxxx['requestx']->sociales){
            foreach ($dataxxxx['requestx']->sociales as $d) {
                $dataxxxx['modeloxx']->sociales()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
            }
        }
      
        if($dataxxxx['requestx']->familiares){
            foreach ($dataxxxx['requestx']->familiares as $d) {
                $dataxxxx['modeloxx']->familiares()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
            }
        }

        return redirect()
            ->route($this->opciones['routxxxx'] . '.editar', [$dataxxxx['modeloxx']->id])
            ->with('info', $dataxxxx['menssage']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VsiAreaAjusteEditarRequest $request, Vsi $objetoxx)
    {
        
        $objetoxx->emocionales()->detach();
        $objetoxx->sexuales()->detach();
        $objetoxx->comportamentales()->detach();
        $objetoxx->academicas()->detach();
        $objetoxx->sociales()->detach();
        $objetoxx->familiares()->detach();
        return $this->grabar([
            'requestx' => $request,
            'modeloxx' => $objetoxx,
            'menssage' => 'Registro actualizado con éxito'
        ]);
    }


}
