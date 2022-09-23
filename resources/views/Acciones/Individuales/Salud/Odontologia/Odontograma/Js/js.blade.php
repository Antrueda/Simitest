<script>
  $(document).ready(function(){
    $('#diag_id').select2({
      language: "es"
    });
    
    $('#add_btn').on('click',function(){
     var html='';
     html+='<div class="col-sm-3">';
      html+='{{ Form::label('diag_id', 'Diagnostico', ['class' => 'control-label col-form-label-sm']) }}';
     html+='{{Form::select('diag_id[]', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','id'=>'diag_id']) }}';
      html+='</div>';
     $('#test').append(html);
    });

});





</script>
