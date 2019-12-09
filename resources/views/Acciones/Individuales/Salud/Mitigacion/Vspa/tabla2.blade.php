@component('bootstrap::table')
    @slot('class')
        table-sm table-hover table-responsive-sm my-2
    @endslot
    <thead class="text-center">
        <tr>
            <th>Ítem</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>4.1 ¿Ha usado alguna vez sustancias psicoactivas para relajarse, calmar las ansias o mejorar su estado emocional?</td>
            <td>
                {{ Form::select('prm_cuatro_uno_id', $sino, null, ['class' => $errors->first('prm_cuatro_uno_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.2. ¿Ha usado alguna vez cigarrillo, tabaco, alcohol o sustancias psicoactivas para integrarse a un grupo?</td>
            <td>
                {{ Form::select('prm_cuatro_dos_id', $sino, null, ['class' => $errors->first('prm_cuatro_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.3 ¿ Alguna vez sus amigos o familiares, le han sugerido que reduzca el consumo de sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_tres_id', $sino, null, ['class' => $errors->first('prm_cuatro_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.4 ¿Ha estado involucrado en riñas, altercados o problemas (peleas, robos) al consumir sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_cuatro_id', $sino, null, ['class' => $errors->first('prm_cuatro_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.5 ¿Se le ha olvidado alguna vez lo que hizo mientras consumía sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_cinco_id', $sino, null, ['class' => $errors->first('prm_cuatro_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.6 ¿Alguna vez ha consumido alcohol o alguna sustancia psicoactiva mientras estaba solo o sola?</td>
            <td>
                {{ Form::select('prm_cuatro_seis_id', $sino, null, ['class' => $errors->first('prm_cuatro_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.7 ¿Se siente preocupado/a por su situación actual de uso de sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_siete_id', $sino, null, ['class' => $errors->first('prm_cuatro_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.8 ¿Alguna vez ha tenido relaciones sexuales sin protección bajo el efecto de sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_ocho_id', $sino, null, ['class' => $errors->first('prm_cuatro_ocho_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.9 ¿Alguna vez ha dejado de cumplir con sus responsabilidades por estar bajo el efecto de sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_nueve_id', $sino, null, ['class' => $errors->first('prm_cuatro_nueve_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.10 ¿Le cuesta concentrarse a la hora de estudiar/leer y/o se le olvidan fácilmente las cosas debido al consumo de sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_diez_id', $sino, null, ['class' => $errors->first('prm_cuatro_diez_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.11 ¿Tiene problemas para conciliar el sueño debido al consumo de sustancias psicoactivas?</td>
            <td>
                {{ Form::select('prm_cuatro_once_id', $sino, null, ['class' => $errors->first('prm_cuatro_once_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>
        <tr>
            <td>4.12 ¿Ha frecuentado espacios de fiesta donde hay expendio de sustancias psicoactivas y trabajo sexual? (Zonas de tolerancia, prostíbulos, amanecederos)</td>
            <td>
                {{ Form::select('prm_cuatro_doce_id', $sino, null, ['class' => $errors->first('prm_cuatro_doce_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
            </td>
        </tr>        
    </tbody>
@endcomponent
