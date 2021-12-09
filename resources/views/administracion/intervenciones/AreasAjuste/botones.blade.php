<div class="row">
    <div class="d-flex justify-content-center col-12 mt-2 mb-5">
        @if ($salvarxxx)
            <button type="submit" class="btn btn-sm btn-primary" data-toggle="tooltip">GUARDAR</button>
        @endif
        <a href='{{ route($rutaxxxx . '.index', ['atencion' => Route::current()->parameters['atencion']]) }}'
            class="btn btn-sm btn-primary text-white ml-2">VOLVER A
            {{ $tituloxx }}</a>
    </div>
</div>
