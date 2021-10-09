@extends('layouts.index')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h1>
                ÁREA: {{ $area->nombre }}
            </h1>
        </div>
        <div class="card-header p-2">
            @include('indicadores.admin.inligrutemacombo.menu')
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="card">
                    <div class="card-header">
                        <h1>
                        </h1>
                        <div class="row px-2 py-1">
                            @if (session()->has('message'))
                            <div class="alert alert-success col-12" role="alert">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-header p-2">
                        @include('indicadores.admin.inligrutemacombo.tabs')
                    </div>
                    <div class="card text-left">
                        <div class="card-header">
                            <h1 style="text-align: center"><strong>VER PREGUNTA</strong> </h1>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="form-group row">
                                <div class="form-group col-md-12">
                                    <label for="in_base_fuente_id" class="control-label col-form-label-sm">GRUPO LÍNEA
                                        BASE:</label>
                                    <select class="form-control form-control-sm" id="in_ligru_id" name="in_ligru_id">
                                        <option value="{{$lineagru->in_ligru_id}}">{{$lineagru->in_ligru_id}} </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="in_ligru_id" class="control-label col-form-label-sm">PREGUNTA:</label>

                                    <select class="form-control form-control-sm" id="temacombo_id" name="temacombo_id">
                                        <option value="{{$lineagru->temacombo->id}}">
                                            {{$lineagru->temacombo->nombre}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group card-footer text-muted text-center">
                                <a href="{{ route('grupregu', ['padrexxx'=>$lineagru->in_ligru_id]) }}"
                                    class="btn btn-sm btn-primary">VOLVER A PREGUNTAS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection