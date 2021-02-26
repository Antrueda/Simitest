<div class="row">
    <div class="col-md-6">
        {{ Form::label('prm_convive_id', 'Convivieron', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_convive_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_convive_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_convive_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_convive_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('tconvive', 'Tiempo de convivencia', ['class' => 'control-label col-form-label-sm']) }}
            <table class="table" id="tconvive">
                <thead>
                    <tr>
                        <th>DIA</th>
                        <th>MES</th>
                        <th>AÑO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ Form::number('dia', $todoxxxx['diaxxxxx'], ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
                            @if($errors->has('dia'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('dia') }}
                            </div>
                            @endif</td>
                        <td>{{ Form::label('mes', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
                            {{ Form::number('mes', $todoxxxx['mesxxxxx'], ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
                            @if($errors->has('mes'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('mes') }}
                            </div>
                            @endif</td>
                        <td>{{ Form::label('ano', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
                            {{ Form::number('ano', $todoxxxx['anoxxxxx'], ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
                            @if($errors->has('ano'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('ano') }}
                            </div>
                            @endif</td>
                    </tr>
                </tbody>
            </table>



    </div>
    <div class="col-md-6">
        {{ Form::label('hijo', '# Hijos(as)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('hijo', $todoxxxx['hijoxxxx'], ['class' => $errors->first('hijo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Hijos', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('hijo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('hijo') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('prm_separa_id', 'Motivo de separación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_separa_id', $todoxxxx['separaci'], null, ['class' => $errors->first('prm_separa_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_separa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_separa_id') }}
        </div>
        @endif
    </div>
</div>

<div class="form-group row">
    @include('layouts.registro')
</div>
