<style>
    input[type="checkbox"] {
  width: 22px;
  height: 22px;
}

input[type="checkbox"]:checked {
    box-shadow: 0 0 2px #0069d9, 0 0 10px #0069d9, 0 0 15px #0069d9;
}

input[type="checkbox"]:hover {
    box-shadow: 0 0 2px #A9A9A9, 0 0 10px #A9A9A9, 0 0 15px #A9A9A9;
}
.perfilvocacional .lista{
    height: 93vh;
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
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm ','placeholder'=>'Seleccionar fecha']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
            @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
            @endif
        </div>
    </div>
    
    <div class="form-row border-bottom border-secondary bg-secondary text-white rounded-top">
        <div class="form-group col-md-1 mb-0 border-right">
            <p class=""><strong>No.</strong></p>
        </div>
        <div class="form-group col-md-9 mb-0 border-right">
            <p class=""><strong>Actividad</strong></p>
        </div>
        <div class="forn-group col-md-2 mb-0">
            <p class=""><strong>Me gusta</strong></p>
        </div>
    </div>
   
    <div class="card-footer text-muted p-1">
        <strong><span class="text-primary n-seleccionados"></span></strong> actividades seleccionadas de <strong>{{$todoxxxx['actividades']->count()}}</strong>
    </div>
    
 

</div>


