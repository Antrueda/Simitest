@canany(['vsidinfamiliar-crear', 'vsidinfamiliar-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">5. Dinámica familiar</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['route' => ['VSI.dinfamiliar.genograma', $vsi->id], 'class' => 'form-horizontal pb-4', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('archivo', '5.1 GENOGRAMA', ['class' => 'control-label col-form-label-sm']) }}
                    @if($vsi->sis_esta_id == 1)
                        {{ Form::file('archivo', ['accept' => 'image/jpeg']) }}
                        @if($errors->has('archivo'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('archivo') }}
                            </div>
                        @endif
                        @canany(['vsidinfamiliar-crear', 'vsidinfamiliar-editar'])
                            {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
                        @endcanany
                        <span>Seleccione archivo de imágen jpg.</span>
                    @endif
                </div>
                <div class="col-md-6">
                    @if(Storage::disk('local')->exists('public/sicosocial/genograma/'.$vsi->id.'.jpg'))
                        <img src="{{ asset('storage/sicosocial/genograma/'.$vsi->id.'.jpg') }}" class="img-fluid" alt="Genograma">
                    @endif
                </div>
            </div>
        {!! Form::close() !!}
        <div class="row">
            <div class="col-md-12">
                <h6><b>5.2. RELACIONES DE PAREJA</b></h6>
            </div>
        </div>
        @if($vsi->sis_esta_id == 1)
            {!! Form::open(['route' => ['VSI.dinfamiliar.madre', $vsi->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('vsi_id', $vsi->id) }}
                <div class="row">
                    <div class="col-md-12">
                        <h6>5.2.1 Relaciones de la progenitora (Cuando el vinculado se NNA) o relaciones del joven vinculado al IDIPRON</h6>
                    </div>
                </div>
                @include('Sicosocial.DinFamiliar.camposRelProgenitora')
            {!! Form::close() !!}
        @endif
        @include('Sicosocial.DinFamiliar.datosRelProgenitora')
        @if($vsi->sis_esta_id == 1)
            {!! Form::open(['route' => ['VSI.dinfamiliar.padre', $vsi->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('vsi_id', $vsi->id) }}
                <div class="row">
                    <div class="col-md-12">
                        <h6>5.2.2 Relaciones del progenitor (Cuando el vinculado se NNA) o relaciones del joven vinculado al IDIPRON</h6>
                    </div>
                </div>
                @include('Sicosocial.DinFamiliar.camposRelProgenitor')
            {!! Form::close() !!}
        @endif
        @include('Sicosocial.DinFamiliar.datosRelProgenitor')
        @if(!$valor)
            {!! Form::open(['route' => ['VSI.dinfamiliar', $vsi->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('vsi_id', $vsi->id) }}
                @include('Sicosocial.DinFamiliar.campos')
            {!! Form::close() !!}
        @else
            {!! Form::model($valor, ['route' => ['VSI.dinfamiliar.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                @include('Sicosocial.DinFamiliar.campos')
            {!! Form::close() !!}
        @endif
    </div>
</div>
@endcanany