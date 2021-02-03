<?php

namespace App\Http\Requests\Acciones\Individuales;

use App\Rules\FechaMenor;
use App\Traits\GestionTiempos\ManageTimeTrait;
use Illuminate\Foundation\Http\FormRequest;

class AIEvasionesRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    use  ManageTimeTrait;
    
    public function __construct()
    {
        $this->_mensaje = [
            'departamento_id.required' => 'Seleccione el departamento',
            'municipio_id.required' => 'Seleccione el municipio',
            'fecha_diligenciamiento.required' => 'Indique fecha de diligenciamiento',
            'prm_upi_id.required' => 'Seleccione una UPI',
            'lugar_evasion.required' => 'Indique el lugar se evadio el NNA',
            'fecha_evasion.required' => 'Indique fecha de evasión',
            'hora_evasion.required' => 'Indique hora de evasión',
            'nnaj_talla.required' => 'Indique la talla',
            'nnaj_peso.required' => 'Indique el peso',
            'prm_contextura_id.required' => 'Indique tipo de contextura',
            'prm_rostro_id.required' => 'Indique tipo de rostro',
            'prm_piel_id.required' => 'Indique tipo de piel',
            'prm_colCabello_id.required' => 'Indique el color de cabello',
            'prm_tinturado_id.required' => 'Indique si es tinturado',
            'tintura.required_if' => 'Indique que color de tintura',
            'prm_tipCabello_id.required' => 'Indique el tipo de cabello',
            'prm_corCabello_id.required' => 'Indique el corte de cabello',
            'prm_ojos_id.required' => 'Indique el color de ojos',
            'prm_nariz_id.required' => 'Indique la forma de la nariz',
            'prm_tienelunar_id.required' => 'Indique si tiene lunar',
            'cuantos.required_if' => 'Indique cuantos lunares',
            'prm_tamlunar_id.required_if' => 'Indique que tamaño son los lunares',
            'senias.required' => 'Indique que Señas particulares',
            'circunstancias.required' => 'Digite las circunstancias',
            'observaciones_fam.required' => 'Digite las observaciones',
            'prm_reporta_id.required' => 'Seleccione si se realizo llamada a linea de atención',
            'prm_llamada_id.required_if' => 'Indique a cual numero',
            'radicado.required_if' => 'Digite el numero de radicado',
            'user_doc1_id.required' => 'Seleccione quien evidencio la evasión',
            'user_doc2_id.required' => 'Seleccione quien digito el formato',
            'institución.required_if' => 'Indique que institucion recibe la denuncia',
            'nombre_recibe.required_if' => 'Digite nombres y apellidos de quien recibe la denuncia',
            'cargo_recibe.required_if' => 'Digite el cargo de quien recibe la denuncia',
            'placa_recibe.required_if' => 'Digite la placa de quien recibe la denuncia',
            'fecha_denuncia.required_if' => 'Indique la fecha de la denuncia',
            'hora_denuncia.required_if' => 'Indique la hora de la denuncia',
            

            ];
        $this->_reglasx = [
            'departamento_id' => 'required|exists:sis_departamentos,id',
            'municipio_id' => 'required|exists:sis_municipios,id',
            'fecha_diligenciamiento' => ['required', 'date_format:Y-m-d', new FechaMenor()],
            'prm_upi_id'    => 'required|exists:sis_depens,id',
            'lugar_evasion' => 'required|string|max:120',
            'fecha_evasion' => 'required|date|',
            'hora_evasion'  => 'required',
            'nnaj_talla'    => 'required|integer',
            'nnaj_peso'     => 'required|integer',
            'prm_contextura_id' => 'required|exists:parametros,id',
            'prm_rostro_id' => 'required|exists:parametros,id',
            'prm_piel_id'   => 'required|exists:parametros,id',
            'prm_colCabello_id' => 'required|exists:parametros,id',
            'prm_tinturado_id'  => 'required|exists:parametros,id',
            'tintura'       => 'required_if:prm_tinturado_id,227|max:120',
            'prm_tipCabello_id' => 'required|exists:parametros,id',
            'prm_corCabello_id' => 'required_unless:prm_tipCabello_id,1459|exists:parametros,id',
            'prm_ojos_id'   => 'required|exists:parametros,id',
            'prm_nariz_id'  => 'required|exists:parametros,id',
            'prm_tienelunar_id' => 'required|exists:parametros,id',
            'cuantos'       => 'required_if:prm_tienelunar_id,227',
            'prm_tamlunar_id'   => 'required_if:prm_tienelunar_id,227',
            'senias'        => 'required|string|max:4000',
            'circunstancias'=> 'required|string|max:4000',
            'observaciones_fam'=> 'required|string|max:4000',
            'prm_reporta_id'   => 'required|exists:parametros,id',
            'prm_llamada_id'   => 'required_if:prm_reporta_id,227|exists:parametros,id',
            'radicado'         => 'required_if:prm_reporta_id,227|max:120',
            'recibe_denuncia'  => 'required_if:prm_reporta_id,227|max:120',
            'user_doc1_id'     => 'required|exists:users,id',
            'user_doc2_id'     => 'required|exists:users,id',
            'responsable'      => 'required|exists:users,id',
            'institución'      => 'required_if:prm_reporta_id,227|max:120',
            'nombre_recibe'    => 'required_if:prm_reporta_id,227|max:120',
            'cargo_recibe'     => 'required_if:prm_reporta_id,227|max:120',
            'placa_recibe'     => 'required_if:prm_reporta_id,227|max:120',
            'fecha_denuncia'   => 'required_if:prm_reporta_id,227',
            'hora_denuncia'    => 'required_if:prm_reporta_id,227',
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
        if ($this->fecha_diligenciamiento != '') {
            $puedexxx = $this->getPuedeCargar([
                'estoyenx' => 1, // 1 para acciones individuale y 2 para acciones grupales
                'fechregi' => $this->fecha_diligenciamiento
            ]);

            if (!$puedexxx['tienperm']) {
                $this->_mensaje['sinpermi.required'] = 'NO TIENE PREMISOS PARA REGISTRAR INFORMACION INFERIOR A LA FECHA: ' . $puedexxx['fechlimi'];
                $this->_reglasx['sinpermi'] = 'required';
            }
        }
        $this->validar();

        return $this->_reglasx;
    }
    public function validar()
    {

    }
}
