@canany(['csddinfamiliar-crear', 'csddinfamiliar-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">6. Dinámica familiar</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['route' => ['CSD.dinfamiliar.genograma', $dato->id], 'class' => 'form-horizontal pb-4', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md">
                    {{ Form::label('archivo', '6.3 GENOGRAMA', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::file('archivo', ['accept' => 'image/jpeg']) }}
                    @if($errors->has('archivo'))
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('archivo') }}
                        </div>
                    @endif
                    @canany(['csddinfamiliar-crear', 'csddinfamiliar-editar'])
                        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
                    @endcanany
                    <span>Seleccione archivo de imágen jpg.</span>
                </div>
                <div class="col-md">
                    @if(Storage::disk('local')->exists('public/domicilio/genograma/'.$dato->id.'.jpg'))
                        <img src="{{ asset('storage/domicilio/genograma/'.$dato->id.'.jpg') }}" class="img-fluid" alt="Genograma">
                    @endif
                </div>
            </div>
        {!! Form::close() !!}
        <div class="row">
            <div class="col-md-12">
                <h6>6.4 Relaciones de pareja</h6>
            </div>
        </div>
        {!! Form::open(['route' => ['CSD.dinfamiliar.madre', $dato->id], 'class' => 'form-horizontal']) !!}
            {{ Form::hidden('csd_id', $dato->id) }}
            <div class="row">
                <div class="col-md-12">
                    <h6>6.4.1 Relaciones de la progenitora (Cuando el vinculado se NNA) o relaciones del joven vinculado al IDIPRON</h6>
                </div>
            </div>
            @include('Domicilio.DinFamiliar.camposRelProgenitora')
        {!! Form::close() !!}
        @include('Domicilio.DinFamiliar.datosRelProgenitora')
        {!! Form::open(['route' => ['CSD.dinfamiliar.padre', $dato->id], 'class' => 'form-horizontal']) !!}
            {{ Form::hidden('csd_id', $dato->id) }}
            <div class="row">
                <div class="col-md-12">
                    <h6>6.4.2 Relaciones del progenitor (Cuando el vinculado se NNA) o relaciones del joven vinculado al IDIPRON</h6>
                </div>
            </div>
            @include('Domicilio.DinFamiliar.camposRelProgenitor')
        {!! Form::close() !!}
        @include('Domicilio.DinFamiliar.datosRelProgenitor')
        @if(!$valor)
            {!! Form::open(['route' => ['CSD.dinfamiliar', $dato->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('csd_id', $dato->id) }}
                @include('Domicilio.DinFamiliar.campos')
            {!! Form::close() !!}
        @else
            {!! Form::model($valor, ['route' => ['CSD.dinfamiliar.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
                {{ Form::hidden('csd_id', $valor->csd_id) }}
                @include('Domicilio.DinFamiliar.campos')
            {!! Form::close() !!}
        @endif
    </div>
@endcanany