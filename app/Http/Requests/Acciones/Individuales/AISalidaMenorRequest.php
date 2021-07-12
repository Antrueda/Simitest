<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Rules\FechaMenor;
use App\Rules\TiempoCargueRule;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Foundation\Http\FormRequest;

class AISalidaMenorRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;

    public function __construct()
    {
        $this->_mensaje = [
            'prm_upi_id.required' => 'Seleccione la UPI',
            'fecha.required' => 'Indique fecha de diligenciamiento',
            'hora_salida.required' => 'Indique la hora de salida',
            'prm_doc_id.required' => 'Indique el tipo de documento',
            'prm_parentezco_id.required' => 'Indique el parentesco',
            'prm_autorizado_id.required' => 'Indique si cuenta con autorización del defensor de familia',
            'descripcion.required' => 'Digite una descripción ',
            'objetos.required' => 'Digite si sale con algun objeto',
            'prm_upi2_id.required' => 'Seleccione la UPI',
            'tiempo.required' => 'Indique cuantos días',
            'dir_salida.required' => 'Indique la dirección donde se llevará a cabo la salida',
            'tel_contacto.required' => 'Digite un numero de contacto',
            'nombres_recoge.required' => 'Digite el nombre de quien recoge al NNA',
            'objetivo.required' => 'Indique el objetivo de la salida',
            'prm_condicion_id.required' => 'Indique si se encuentra en condiciones físicas óptimas',
            'prm_orientado_id.required' => 'Indique si se encuentra orientado en sus tres esferas',
            'prm_enfermerd_id.required' => 'Indique si presenta alguna enfermedad general',
            'prm_brotes_id.required' => 'Indique si presenta algun brote',
            'prm_laceracio_id.required' => 'Indique si presenta alguna laceración o hematoma',
            'prm_carta_id.required'      => 'Campo obligatorio',
            'prm_copiaDoc_id.required'   => 'Campo obligatorio',
            'prm_copiaDoc2_id.required'  => 'Campo obligatorio',
            'user_doc1_id.required'   => 'Campo obligatorio',




            ];
        $this->_reglasx = [
            'prm_upi_id'        => 'required|exists:sis_depens,id',
            'fecha' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'hora_salida'    => 'required',
            'primer_apellido'   => 'required|string|max:120',
            'segundo_apellido'  => 'nullable|string|max:120',
            'primer_nombre'     => 'required|string|max:120',
            'segundo_nombre'    => 'nullable|string|max:120',
            'prm_doc_id'        => 'required|exists:parametros,id',
            'documento'         => 'required|string|max:10',
            'prm_parentezco_id' => 'required|exists:parametros,id',
            'prm_autorizado_id' => 'required|exists:parametros,id',
            'ape1_autorizado'   => 'nullable|string|max:120',
            'ape2_autorizado'   => 'nullable|string|max:120',
            'nom1_autorizado'   => 'nullable|string|max:120',
            'nom2_autorizado'   => 'nullable|string|max:120',
            'prm_doc2_id'       => 'nullable|exists:parametros,id',
            'doc_autorizado'    => 'nullable|string|max:10',
            'prm_parentezco2_id'=> 'nullable|exists:parametros,id',
            'prm_carta_id'      => 'required|exists:parametros,id',
            'prm_copiaDoc_id'   => 'required|exists:parametros,id',
            'prm_copiaDoc2_id'  => 'required|exists:parametros,id',
            'descripcion'       => 'required|string|max:4000',
            'objetos'           => 'required|string|max:4000',
            'prm_upi2_id'       => 'required|exists:parametros,id',
            'tiempo'            => 'required|integer',
            'dir_salida'        => 'required|string|max:120',
            'tel_contacto'      => 'required|integer',
            'causa'             => 'nullable|string|max:4000',
            'nombres_recoge'    => 'required|string|max:120',
            'doc_recoge'        => 'required|string|max:10',
            'responsable'       => 'required|exists:users,id',
            'user_doc1_id'      => 'required|exists:users,id',
            'objetivo'          => 'required|array',
            'prm_condicion_id'       => 'required',
            'prm_orientado_id'       => 'required',
            'prm_enfermerd_id'       => 'required',
            'prm_brotes_id'       => 'required',
            'prm_laceracio_id'       => 'required',
            ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    public function messages()
    {
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->fecha != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha
            ]);
            $this->_reglasx['fecha'][] = new TiempoCargueRule(['puedexxx' => $puedexxx]);
        }
        $this->validar();

        return $this->_reglasx;
    }
    public function validar()
    {

    }
}
