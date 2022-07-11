
<div class="row mt-3">
  <div class="col-md-12">
    <center><h6 class="">COMPONENTES DEL DESEMPEÑO</h6></center>
  </div>
</div>
<hr>

<div class="container">
    <div class="row d-flex justify-content-center">
     
        <div class="col-md-10" 
        {{-- style="overflow-y: scroll; height:100vh;" --}}
        >
              
                    <div class="row"> 
                        <div class="form-group col-md-6">
                            {{ Form::label('created_at', 'FECHA DE DILIGENCIAMIENTO:', ['class' => 'control-label col-form-label-sm']) }}
                            <div id="created_at" class="form-control form-control-sm">
                                {{$todoxxxx["modeloxx"]->fecha_registro}}
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('created_at', 'RESULTADO:', ['class' => 'control-label col-form-label-sm']) }}
                            @if ($todoxxxx["modeloxx"]->resultado_text <82)
                            <p class="">Total, puntos <strong>{{$todoxxxx["modeloxx"]->resultado_text}}</strong>: Lo que quiere decir que el/la Joven cuenta con un Desempeño de Baja Funcionalidad.</p>
                            @endif

                            @if ($todoxxxx["modeloxx"]->resultado_text >=82 && $todoxxxx["modeloxx"]->resultado_text < 163)
                            <p class="">Total, puntos <strong>{{$todoxxxx["modeloxx"]->resultado_text}}</strong>: Lo que quiere decir que el/la Joven cuenta con un Desempeño Semifuncional.</p>
                            @endif

                            @if ($todoxxxx["modeloxx"]->resultado_text >=163 && $todoxxxx["modeloxx"]->resultado_text < 244)
                            <p class="">Total, puntos <strong>{{$todoxxxx["modeloxx"]->resultado_text}}</strong>: Lo que quiere decir que el/la Joven cuenta con un Desempeño Funcional.</p>
                            @endif
                        </div>
                    
                        <div class="col-md-12 bg-light mb-2">
                            <p><strong>CONCEPTO PERFIL</strong>:</p>
                            <p class="control-label col-form-label-sm ">{{$todoxxxx["modeloxx"]->concepto_perfil}}</p>
                        </div>
                      
                        <div class="form-group col-md-6">
                            {{ Form::label('created_at', 'FECHA Y HORA DE REGISTRO', ['class' => 'control-label col-form-label-sm']) }}
                            <div id="created_at" class="form-control form-control-sm">
                                {{$todoxxxx["modeloxx"]->created_at}}
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('created_at', 'FECHA Y HORA DE ACTUALIZACI&Oacute;N', ['class' => 'control-label col-form-label-sm']) }}
                            <div id="updated_at" class="form-control form-control-sm">
                                {{$todoxxxx["modeloxx"]->updated_at}}
                            </div>
                        </div> 
                        <div class="form-group col-md-6">
                            {{ Form::label('created_at', 'USUARIO QUE REGISTR&Oacute;', ['class' => 'control-label col-form-label-sm']) }}
                            <div id="user_crea_id" class="form-control form-control-sm">
                                {{$todoxxxx["modeloxx"]->creador->name}}
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('created_at', 'USUARIO QUE ACTUALIZ&Oacute;', ['class' => 'control-label col-form-label-sm']) }}
                            <div id="user_edita_id" class="form-control form-control-sm">
                                {{$todoxxxx["modeloxx"]->editor->name}}
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-12  bg-light text-wrap mt-2 mb-2">
                        <p class="text-center fw-light text-sm"><strong>0</strong>: NO LOGRA, <strong>1</strong>: LOGRA CON MODERADA DIFICULTAD, <strong>2</strong>: LOGRA CON LEVE DIFICULTAD, <strong>3</strong>: LOGRA SIN DIFICULTAD.</p>
                    </div>
                    @foreach ($todoxxxx['componentes']['respuestacomponentes'] as $key => $item)
                        <div class="tap-perfil-ocupacional tab-pane {{($key==0?'active':'')}}" role="tabpanel" id="step{{$key+1}}">
                            <h4 class="text-center"><span class="border border-secondary pl-2 pr-2 rounded-circle">{{$key+1}} </span>{{$item['componente']['nombre']}}</h4>

                            @foreach ($item['respuestaitems'] as $key2 => $parametro)
                                @if ($parametro['item']['categoria'])
                                    @if ($key2 == 0)
                                        <div class="row col-md-6  bg-light">
                                            <p class="text-uppercase mb-1 mt-1 fw-bold">{{$parametro['item']['categoria']['nombre']}}</p>
                                        </div>                 
                                    @else
                                        @if (!($item['respuestaitems'][$key2-1]['item']['categoria']['nombre'] == $parametro['item']['categoria']['nombre']))
                                            <div class="row col-md-6  bg-light">
                                                <p class="text-uppercase mb-1 mt-1 fw-bold">{{$parametro['item']['categoria']['nombre']}}</p>
                                            </div>         
                                        @endif
                                    @endif
                                @endif
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="control-label col-form-label-sm">{{$parametro['item']['item_nombre']}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <center>
                                            <p class="control-label col-form-label-sm  bg-light"><strong>{{$parametro['valor']}}</strong></p>
                                        </center>
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                          
                            <div class="row">
                                <div class="col-md-10">
                                    {{ Form::label('','SUBTOTAL COMPONENTE', ['class' => 'control-label col-form-label-sm']) }}
                                </div>
                                <div class="col-md-2">
                                    <p class="d-flex justify-content-center"><strong>{{$todoxxxx["modeloxx"]->sumaSubtotal($item['respuestaitems'])}}</strong></p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 bg-light mb-2">
                                    <p><strong>OBSERVACION</strong>:</p>
                                    <p class="control-label col-form-label-sm ">{{$item['observacion']}}</p>
                                </div>
                            </div>
                            
                        
                        </div>
                    @endforeach

        </div>
    </div>
</div>







