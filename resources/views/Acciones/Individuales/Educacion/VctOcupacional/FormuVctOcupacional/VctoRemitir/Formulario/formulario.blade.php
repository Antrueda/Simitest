
<div class="card p-1">
    <div class="form-group col-md-12">
        {!! Form::label('prm_remitir', 'Remitir:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::select('prm_remitir',$todoxxxx['si_no'], null, ['name' => 'prm_remitir', 'class' => 'form-control form-control-sm',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
        @if($errors->has('prm_remitir'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_remitir') }}
        </div>
        @endif
    </div>
    <div class="d-none form-group col-md-12 " id="prm_intrainstitucional_field">
        {!! Form::label('intrainstitucional', 'Intrainstitucional:', ['class' => 'control-label text-uppercase ']) !!}
        {!! Form::select('intrainstitucional',$todoxxxx['tema_intra'], null, ['name' => 'intrainstitucional[]', 'class' => 'form-control form-control-sm select2','required','multiple',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
        @if($errors->has('intrainstitucional'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('intrainstitucional') }}
        </div>
        @endif
    </div>

    <div id="prm_interinstitu_field" class="d-none form-group col-md-12">
        <div class="col-md-12">
            {{ Form::label('interinstitu', 'Interinstitucional:', ['class' => 'control-label text-uppercase col-form-label-sm']) }}
            {{ Form::textarea('interinstitu', null, ['class' => $errors->first('interinstitu') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                                'placeholder' => 'Interinstitucional',
                                'required', 
                                'maxlength' => '120',
                                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',
                                'rows'=>'3','spellcheck'=>'true',
                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_obs_interinstitu">0/120</p>
            @if($errors->has('interinstitu'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('interinstitu') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        {!! Form::label('user_res_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
        {!! Form::select('user_res_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
        @if($errors->has('user_res_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_res_id') }}
        </div>
        @endif
    </div>
    <hr>
    <div class="form-row">
        @include('layouts.registro')
    </div>
</div>

