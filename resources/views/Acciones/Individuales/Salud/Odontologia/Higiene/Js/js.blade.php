<script>
  $(document).ready(function(){
    $('#diag_id').select2({
      language: "es"
    });


  
    // var count=0;
    // var id=1;
    // $('#add_btn').on('click',function(){
    //  count++
    //  id++
    //  if (count>6){
    //   document.getElementById("btn").disabled = true;
    // }else{
    // var html='';
    //  html+='<div class="col-sm-3">';
    //  html+='{{ Form::label('diag_id', 'Diagnostico', ['class' => 'control-label col-form-label-sm']) }}';
    //  html+='{{Form::select('diag1', $todoxxxx['diagnost'],null, ['class' => $errors->first('diag_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}';
    //  html+='</div>';
    //  $('#test').append(html);
    // }
    // });


   


    var superficie = function(selected, upixxxxx,padrexxx) {
           
           let dataxxxx = {
               dataxxxx: {
                   padrexxx:padrexxx,
                   upixxxxx: upixxxxx,
                   cabecera: true,
                   selected: [selected]
               },
               urlxxxxx: '{{ route("vodontograma.superficie") }}',
               campoxxx: 'super_id',
               mensajex: 'Exite un error al cargar los cursos'
           }
           f_comboGeneral(dataxxxx);
       }

       $('#tiposup_id').change(() => {
            let upixxxxx = $('#tiposup_id').val();
            let cabecera = true
            superficie(0,upixxxxx);
            
        });
});





</script>
