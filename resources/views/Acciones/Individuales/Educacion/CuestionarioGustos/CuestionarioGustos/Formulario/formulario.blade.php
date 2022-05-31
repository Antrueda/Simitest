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
    
   
    @foreach ($todoxxxx['habilidades'] as $key => $habilidad)
        <center><p>{{$habilidad->nombre}}</p></center>
        <table class="table">
            <thead>
            <tr>
                <th>Letra</th>
                <th>Habilidad</th>
                <th>Selector</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($habilidad->habilidades as $key => $item)
                    <tr>
                        <th>
                            {{$item->letra->nombre}}
                        </th>
                        <th>
                            {{$item->nombre}}
                        </th>
                        <th>
                        <center>        
                            <input class="form-check-input check_habilidades" type="checkbox" name="habilidades[]" value="{{$habilidad->id.'_'.$item->id}}" id="item{{$key+1}}"
                                {{ in_array($item->id,isset($todoxxxx['modeloxx']->habilidades)? $todoxxxx['modeloxx']->habilidades:[]) ?'checked' : '' }}
                            />
                        </center>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach


        <table class="table">
            <thead>
            <tr>
                <th>Letra</th>
                <th>Curso</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($todoxxxx['conthabi'] as $key => $item)
                    <tr>
                        <th>
                            {{$key}}
                        </th>
                        <th>
                            {{$item[1]}}
                        </th>
                        <th>
                            {{$item[0]}}
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>


<div class="col-md-12">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div>
</div>
