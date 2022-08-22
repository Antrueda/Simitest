<style>
    select:focus {
        outline: 3px solid red !important;
    }
    textarea:focus {
        outline: 3px solid red !important;
    }
</style>
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
                    @if ($area->subareas->count() != 0)
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
                                                        'class' => 'form-control form-control-sm','required',
                                                        ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
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
                                                'required',
                                                'maxlength' => '4000',
                                                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',
                                                'rows'=>'3','spellcheck'=>'true',
                                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )],) }}
                                    <p id="contador_descripcion{{$area->id}}">0/4000</p>
                                </div>
                            </th>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        {{ Form::label('concepto', 'CONCEPTO OCUPACIONAL:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('concepto', null, 
                            ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                            'placeholder' => 'Aquí se registran de forma sucinta los resultados obtenidos en cada uno de los componentes o áreas evaluadas, se emiten conceptos sobre el nivel de desempeño por componentes y general; se hacen las observaciones sobre hallazgos más relevantes o determinantes para el desempeño y se hacen las sugerencias de intervención a nivel intra e interinstitucional. Se deben señalar las áreas de interés como resultado del cuestionario de intereses y habilidades.','required',
                             'maxlength' => '4000',
                             'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',
                             'rows'=>'5','spellcheck'=>'true',
                             ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_concepto">0/4000</p>
        @if($errors->has('concepto'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('senias') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
