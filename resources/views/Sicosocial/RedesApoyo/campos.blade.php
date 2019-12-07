<div class="row">
    <div class="col-md-12">
        <h6>7.1 </h6>
        <hr>
    </div>
</div>
@include('Sicosocial.RedesApoyo.camposAntecedentes')
<div class="row mt-3">
	@if ($vsi->activo == 1)
		@canany(['vsiredesapoyo-crear', 'vsiredesapoyo-editar'])
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcanany
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>