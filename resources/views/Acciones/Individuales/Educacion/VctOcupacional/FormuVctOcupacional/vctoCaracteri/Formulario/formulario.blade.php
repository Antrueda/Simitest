
<div class="card p-1">
    <div class="table-responsive">
        <table class="table table-bordered mb-0">
            <thead>
            <tr class="bg-secondary text-white">
                <th scope="col">ÁREA</th>
                <th scope="col">ACCIONES</th>
                <th scope="col">EVALUACIÓN</th>
            </tr>
            </thead>
            <tbody>              
                @foreach ($todoxxxx['areaitems'] as $key => $area)
                    <tr>
                        <th scope="row" ROWSPAN="{{($area->itemsForArea() + count($area->subareas) + 1)}}"><center>{{$area->nombre}}</center></th>
                    </tr>
                    
                    @foreach ($area->subareas as $key => $subarea)
                        <tr>
                            <th COLSPAN="2">
                                <center>{{$subarea->nombre}}</center>
                            </th>
                        </tr>
                        @foreach ($subarea->items as $key => $item)
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>        
                                    {!! Form::select('prm_dinsust', $todoxxxx['itemeval'],
                                                     old('caracterizacion.'.($area->id).'.items.'.($item->id),
                                                     isset($todoxxxx['actual_caracterizacion'][($area->id)]['items'][($item->id)]) ? $todoxxxx['actual_caracterizacion'][($area->id)]['items'][($item->id)] : ''), 
                                                    ['name'=> 'caracterizacion['.$area->id.'][items]['.($item->id).']',
                                                    'class' => 'form-control form-control-sm','required']) !!}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                    <tr>
                        <th COLSPAN="3">
                            <div class="col-md-12">
                                {!! Form::hidden( 'area',$area->id, ['name'=> 'caracterizacion['.$area->id.'][area]']) !!}
                                {{ Form::label( 'descripcion'.$area->id, 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
                                {{ Form::textarea( 'descripcion'.$area->id,  
                                            old('caracterizacion.'.($area->id).'.descripcion',
                                                isset($todoxxxx['actual_caracterizacion'][($area->id)]['descripcion']) ? $todoxxxx['actual_caracterizacion'][($area->id)]['descripcion'] : ''), 
                                            ['name'=> 'caracterizacion['.$area->id.'][descripcion]',
                                            'class' => 'form-control form-control-sm', 
                                            'placeholder' => 'ESCRIBIR OBSERVACION ÁREA '.$area->nombre, 
                                            'maxlength' => '4000','rows'=>'3','spellcheck'=>'true']) }}
                                <p id="contador_descripcion{{$area->id}}">0/4000</p>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        {{ Form::label('concepto', 'CONCEPTO PERFIL VOCACIONAL:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('concepto', null, ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escribir datos generales del adolescente y/o joven y los resultados del test de intereses, así como los cursos técnicos a los cuales presenta mayor aptitud e interés. Tenga en cuenta que los resultados corresponden al área con mayor puntuación.','required', 'maxlength' => '4000','rows'=>'5','spellcheck'=>'true']) }}
        <p id="contador_concepto">0/4000</p>
        @if($errors->has('concepto'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('senias') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
