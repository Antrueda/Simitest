<div class="form-row">
  <div class="form-group col-md-3">
    {{ Form::label('prm_sexo_etario_id', '2.1 Talla', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_sexo_etario_id', $todoxxxx['sexoetar'], null, ['class' => $errors->first('prm_sexo_etario_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_sexo_etario_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_sexo_etario_id') }}
      </div>
    @endif
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('prm_t_pantalon_id', 'Pantalón', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_t_pantalon_id', $todoxxxx['tallasxx']['tallpant'], null, ['class' => $errors->first('prm_t_pantalon_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_t_pantalon_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_t_pantalon_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_t_camisa_id', 'Camisa', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_t_camisa_id', $todoxxxx['tallasxx']['tallcami'], null, ['class' => $errors->first('prm_t_camisa_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_t_camisa_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_t_camisa_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_t_zapato_id', '2.2 Zapatos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_t_zapato_id', $todoxxxx['tallzapa'], null, ['class' => $errors->first('prm_t_zapato_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_t_zapato_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_t_zapato_id') }}
      </div>
    @endif
  </div>
</div>
@section('scripts')
<script>
  $(function(){
    $('#prm_sexo_etario_id').change(function(){
       $('#prm_t_pantalon_id,#prm_t_camisa_id').empty()
      $.ajax({
        url: "{{ route('fivestuario.tallas',$todoxxxx['nnajregi'])}}",
        type: 'POST',
        data: {_token: $("input[name='_token']").val(),
           'sexoxxxx':$(this).val(),
        },
        dataType: 'json',
        success: function (json) {
          $('#prm_t_pantalon_id,#prm_t_camisa_id').append('<option selected value="">Seleccione</option>')
          $.each(json.tallpant,function(id,data){
            if(id!=''){
              var listrole='<option  value="'+id+'">'+data+'</option>';
              $('#prm_t_pantalon_id').append(listrole)
            } 
          });
          $.each(json.tallcami,function(id,data){
            if(id!=''){
              var listrole='<option  value="'+id+'">'+data+'</option>';
              $('#prm_t_camisa_id').append(listrole)
            } 
          });

        },
        error: function (xhr, status) {
          alert('Disculpe, existiÃ³ un problema');
        }
      });
    });
  });
  </script>
@endsection