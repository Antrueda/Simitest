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
            <td>5.1  Presunto víctima de abuso sexual</td>
            <td>
                {{ Form::select('prm_cinco_uno_id', $sino, null, ['class' => $errors->first('prm_cinco_uno_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_uno_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.2 Antecedentes y/o influencia familiar (expendido de drogas/ ollas)</td>
            <td>
                {{ Form::select('prm_cinco_dos_id', $sino, null, ['class' => $errors->first('prm_cinco_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_dos_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.3 Dificultades con la pareja (no aplica para Niños y Niñas)</td>
            <td>
                {{ Form::select('prm_cinco_tres_id', $sino, null, ['class' => $errors->first('prm_cinco_tres_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_tres_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.4 Ideación Suicida</td>
            <td>
                {{ Form::select('prm_cinco_cuatro_id', $sino, null, ['class' => $errors->first('prm_cinco_cuatro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_cuatro_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.5 Dificultades econòmicas</td>
            <td>
                {{ Form::select('prm_cinco_cinco_id', $sino, null, ['class' => $errors->first('prm_cinco_cinco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'prm_cinco_cinco_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.6 Conductas  delictivas</td>
            <td>
                {{ Form::select('prm_cinco_seis_id', $sino, null, ['class' => $errors->first('prm_cinco_seis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_seis_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.7 Dificultades familiares</td>
            <td>
                {{ Form::select('prm_cinco_siete_id', $sino, null, ['class' => $errors->first('prm_cinco_siete_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_siete_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.8 Baja motivaciòn escolar</td>
            <td>
                {{ Form::select('prm_cinco_ocho_id', $sino, null, ['class' => $errors->first('prm_cinco_ocho_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_ocho_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.9 Desescolarización</td>
            <td>
                {{ Form::select('prm_cinco_nueve_id', $sino, null, ['class' => $errors->first('prm_cinco_nueve_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_nueve_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.10 Abandono del núcleo familiar para habitar y/o permanenecer en calle</td>
            <td>
                {{ Form::select('prm_cinco_diez_id', $sino, null, ['class' => $errors->first('prm_cinco_diez_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_diez_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.11 Influencia de pares negativos</td>
            <td>
                {{ Form::select('prm_cinco_once_id', $sino, null, ['class' => $errors->first('prm_cinco_once_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_once_id']) }}
            </td>
        </tr>
        <tr>
            <td>5.12 Alteraciones de salud mental</td>
            <td>
                {{ Form::select('prm_cinco_doce_id', $sino, null, ['class' => $errors->first('prm_cinco_doce_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_cinco_doce_id']) }}
            </td>
        </tr>
    </tbody>
@endcomponent
