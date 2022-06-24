<style>
    input[type="checkbox"] {
  width: 22px;
  height: 22px;
}

.perfilvocacional .lista{
    max-height: 93vh;
    overflow-y: scroll;
    overflow-x: hidden;
}
</style>
<div class="card p-1 perfilvocacional">
    {{-- informacion previa de matricula academia y talleres --}}
    @include($todoxxxx['rutacarp'].''.'PerfilVocacional.Formulario.infomatriculasnnaj')

    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div id="consecut" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->fecha }}
            </div>
        </div>
<<<<<<< HEAD
        <div class="form-group col-md-6">
            {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label text-uppercase']) !!}
            <div id="consecut" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->dependencia->nombre }}
            </div>
        </div>
=======
>>>>>>> 24a30a64c09b5c0b51de812c2baa1b622d9f926b
    </div>
    
    <hr>
    <div class="form-row col-md-12">
            {!! Form::label('', 'TEST DE INTERESES:', ['class' => 'control-label']) !!}
    </div>
    <div class="form-row border-bottom border-secondary bg-secondary text-white rounded-top">
        <div class="form-group col-md-1 mb-0 border-right">
            <p class=""><strong>No.</strong></p>
        </div>
        <div class="form-group col-md-9 mb-0 border-right">
            <p class=""><strong>Actividad (Solo actividades cundo se aplicó formulario)</strong></p>
        </div>
        <div class="forn-group col-md-2 mb-0">
            <p class=""><strong>Me gusta</strong></p>
        </div>
    </div>
    <div class="lista">
        @foreach ($todoxxxx['modeloxx']->actividades as $key => $actividad)
            <div class="form-row border-bottom border-secondary ">
                <div class="form-group col-md-1 mb-0 border-right">
                    <p class=""><center>{{$key+1}}</center></p>
                </div>
                <div class="form-group col-md-9 mb-0 border-right">
                    {!! Form::label('item'.($key+1),$actividad->nombre, ['class' => 'font-weight-normal']) !!}
                </div>
                <div class="forn-group col-md-2 mb-0">
                    <center>           
                        <input class="form-check-input" type="checkbox"  checked disabled/>
                    </center>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-12">
        {{ Form::label('observaciones', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
        <div id="consecut" class="form-control form-control-sm" style="height: 100px;">
            {{ $todoxxxx['modeloxx']->observaciones }}
        </div>
    </div>
    <div class="col-md-12">
        {{ Form::label('concepto', 'CONCEPTO PERFIL VOCACIONAL:', ['class' => 'control-label col-form-label-sm']) }}
        <div id="consecut" class="form-control form-control-sm"  style="height: 100px;">
            {{ $todoxxxx['modeloxx']->concepto }}
        </div>
    </div>
    <div class="col-md-12">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div>

    {{-- informacion de resultados tabla y grafica --}}
    @include($todoxxxx['rutacarp'].''.'PerfilVocacional.Formulario.infotablegrafica')
</div>


