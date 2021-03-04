@extends('layouts.index')
@section('content')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title" style="text-transform:uppercase;">HOMOLOGAR PAR&Aacute;METRO ({{$parametr->nombre}})</h3>
    </div>
    <div class="card-body">

        {!! Form::model($temaxxxx, ['route' => ['tema.homolagx', $temaxxxx->id,$temaxxxx->parametro_id], 'method' => 'PUT']) !!}
        <div class="form-row">

            <div class="form-group col-md-12">
                {{ Form::label('simianti_id', 'Código Miltivalores', ['class' => 'control-label']) }}
                {{ Form::text('simianti_id', null, ['class' => $errors->first('simianti_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','autocomplete'=>"off"]) }}
                @if($errors->has('simianti_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('simianti_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-12">
                {{ Form::submit('Modificar', ['class' => 'btn btn-primary','style '=> "text-transform:uppercase;"]) }}
                <a class="btn btn-primary ml-2" href="{{ route('tema.editar',$temaxxxx->id) }}">REGRESAR</a>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>
@endsection
