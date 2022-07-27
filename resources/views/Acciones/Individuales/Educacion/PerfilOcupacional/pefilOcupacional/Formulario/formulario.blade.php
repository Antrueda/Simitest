
<div class="row mt-3">
  <div class="col-md-12">
    <center><h6 class="">COMPONENTES DEL DESEMPEÑO</h6></center>
  </div>
</div>
<hr>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="wizard">
                <div class="wizard-inner mb-3">
                    <ul class="nav nav-tabs d-flex justify-content-center pb-3" role="tablist">
                        @foreach ($todoxxxx['componentes'] as $key => $item)
                            <li role="presentation" class="">
                                <a href="" id="step{{$key+1}}-tab" class="m-1 bg-secondary  pt-2 pb-2 pl-3 pr-3 rounded-circle" data-toggle="tab" aria-controls="step{{$key+1}}" role="tab" aria-expanded="true"><span class="round-tab">{{$key+1}}</a>
                            </li>
                        @endforeach
                        <li role="presentation" class="">
                            <a href="" id="step_finalizar-tab" class="m-1 bg-secondary  pt-2 pb-2 pl-3 pr-3 rounded-circle" data-toggle="tab" aria-controls="step_finalizar" role="tab" aria-expanded="true"><span class="round-tab">Finalizar</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="main_form">
                    @foreach ($todoxxxx['componentes'] as $key => $item)
                        {{-- {{$item}} --}}
                        <div class="tap-perfil-ocupacional tab-pane {{($key==0?'active':'')}}" role="tabpanel" id="step{{$key+1}}">
                            <h4 class="text-center"><span class="border border-secondary pl-2 pr-2 rounded-circle">{{$key+1}} </span>{{$item->nombre}}</h4>
                            <div class="row col-md-12  bg-light text-wrap mb-2">
                                <p class="text-start fw-light text-sm"><strong>0</strong>: NO LOGRA, <strong>1</strong>: LOGRA CON MODERADA DIFICULTAD, <strong>2</strong>: LOGRA CON LEVE DIFICULTAD, <strong>3</strong>: LOGRA SIN DIFICULTAD.</p>
                            </div>
                           
                            @foreach ($item->items as $key2 => $parametro)
                                @if ($parametro->categoria)
                                    @if ($key2 == 0)
                                        <div class="row col-md-6  bg-light">
                                            <p class="text-uppercase mb-1 mt-1 fw-bold">{{$parametro->categoria->nombre}}</p>
                                        </div>                 
                                    @else
                                        @if (!($item->items[$key2-1]->categoria->nombre == $parametro->categoria->nombre))
                                            <div class="row col-md-6  bg-light">
                                                <p class="text-uppercase mb-1 mt-1 fw-bold">{{$parametro->categoria->nombre}}</p>
                                            </div>         
                                        @endif
                                    @endif
                                @endif
                                <div class="row">
                                    <div class="col-md-10">
                                        {{ Form::label('step'.($key+1).'_'.($key2+1), $parametro->item_nombre, ['class' => 'control-label col-form-label-sm']) }}
                                    </div>
                                      {{-- {{dd($todoxxxx['modeloxx']['respuestasactuales'][($item->id)]['respuestas'][($parametro->id)])}}; --}}
                                    <div class="col-md-2">
                                        {{ Form::select('step'.($key+1).'_'.($key2+1),[""=>'-',0=>0,1=>1,2=>2,3=>3], old('items.'.($item->id).'.respuestas.'.($parametro->id),isset($todoxxxx['modeloxx']['respuestasactuales'][($item->id)]['respuestas'][($parametro->id)]) ? $todoxxxx['modeloxx']['respuestasactuales'][($item->id)]['respuestas'][($parametro->id)] : ''), ['name'=>'items['.($item->id).'][respuestas]['.($parametro->id).']','onchange'=>"changeSubTotal('step".($key+1)."');",'class' => 'select_preguntas_perfil '.($errors->first('step'.($key+1).'_'.($key2+1)) ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2')]) }}
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                            <div class="row">
                                
                                <div class="col-md-10">
                                    {{ Form::label('','SUBTOTAL COMPONENTE', ['class' => 'control-label col-form-label-sm']) }}
                                </div>
                                <div class="col-md-2">
                                    <p class="d-flex justify-content-center" id="step{{$key+1}}_subtotal"><strong>0</strong></p>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-md-12">
                                  {{ Form::label('senias', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
                                  {{ Form::textarea('senias',old('items.'.($item->id).'.descripcion',isset($todoxxxx['modeloxx']['respuestasactuales'][($item->id)]['descripcion']) ? $todoxxxx['modeloxx']['respuestasactuales'][($item->id)]['descripcion'] : ''), ['name'=>'items['.($item->id).'][descripcion]','class' => $errors->first('senias') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba su descripción sobre este componente de desempeño', 'maxlength' => '1000','rows'=>'3', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
                                  <p id="contadorsenias">0/1000</p>
                                </div>
                            </div>
                            
                            <ul class="list-inline d-flex justify-content-end">
                                @if (($key+1) != 1)
                                    <li><button type="button" class="btn btn-sm btn-primary mr-3" onclick='check_back({{$key+1}},false);' >Atras</button></li>
                                @endif

                                <li><button type="button" class="btn btn-sm btn-primary" onclick='check({{$key+1}},{{count($item->items)}},{{count($todoxxxx["componentes"])}})' >Siguiente</button></li>
                            </ul>
                        </div>
                    @endforeach
                    <div class="tap-perfil-ocupacional tab-pane" role="tabpanel" id="step_finalizar">
                        <div class="row"> 
                            <div class="form-group col-md-6">
                                {{ Form::label('fecha_registro', 'Fecha De diligenciamiento', ['class' => 'control-label']) }}
                                {{ Form::date('fecha_registro',  null, ['class' => $errors->first('fecha_registro') ? 'form-control form-control is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
                                @if($errors->has('fecha_registro'))
                                <div class="invalid-feedback d-block">
                                {{ $errors->first('fecha_registro') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">  
                            <div class="col-md-5 border-right">
                                {{ Form::label('','RESULTADOS TOTALES', ['class' => 'control-label col-form-label-sm']) }}
                            </div>
                            <div class="col-md-7" id="total_puntos"></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::hidden('total_test',null,['id'=>'total_test']) }}
                              {{ Form::label('concepto_perfil', 'CONCEPTO PERFIL OCUPACIONAL:', ['class' => 'control-label col-form-label-sm']) }}
                              {{ Form::textarea('concepto_perfil', null, ['class' => $errors->first('concepto_perfil') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escribir datos generales del/la joven y los resultados del test de intereses, así como los cursos técnicos a los cuales presenta mayor aptitud e interés. Tenga en cuenta que los resultados corresponden al área con mayor puntuación.', 'maxlength' => '4000','rows'=>'7','spellcheck'=>'true']) }}
                              <p id="contador_concepto_perfil">0/4000</p>
                              @if($errors->has('concepto_perfil'))
                                <div class="invalid-feedback d-block">
                                  {{ $errors->first('senias') }}
                                </div>
                              @endif
                            </div>
                            
                            <div class="form-group col-md-8">
                                {{ Form::label('i_primer_responsable', 'Funcionario(A)/Contratista Responsable', ['class' => 'control-label col-form-label-sm']) }}
                                {{ Form::select('i_primer_responsable', $todoxxxx['usuarios'], null, ['class' => $errors->first('i_primer_responsable') ?
                                    'form-control select2 form-control is-invalid' : 'form-control select2 form-control-sm',
                                    'id' => 'i_primer_responsable','autofocus']) }}
                            </div>
                        </div>
                        <ul class="list-inline d-flex justify-content-end">
                            <li><button type="button" class="btn btn-sm btn-primary mr-3" onclick='check_back({{count($todoxxxx["componentes"])+1}},true);' >Atras</button></li>
                            <li><button type="submit" class="btn btn-sm btn-primary">Guardar</button></li>
                        </ul>
                    </div>

                    <div id="alrt"></div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>







