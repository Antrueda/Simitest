<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

$(function() {
  var f_asiganar_respuesta=function(respuest){
 
      $.ajax( {
        url : "{{ route('ajaxx.asignarespuesta') }}",
        dataType: "json",
        type : 'POST',
        data: {
          _token: $("input[name='_token']").val(),
          i_prm_respuesta_id: respuest,
          in_doc_pregunta_id:{{ $todoxxxx['modeloxx']->id }}

        },
        success: function( data ) {
          
        },
        error : function(xhr, status) {
          alert('No se pudo asignar la respueta seleccionada');
        },
      });
    
  }  
    $("#respuesta_select").autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url : "{{ route('ajaxx.respuestas') }}",
          dataType: "json",
           type : 'POST',
          data: {
            _token: $("input[name='_token']").val(),
            document:{{ $todoxxxx['modeloxx']->id }},
            buscarxx: request.term,
          },
          success: function( data ) {
              response( data[0] );
          }
        } );
      },
      close:function(){
             this.value=''
         },
      minLength: 0,
      select: function( event, ui ) {
        $('#in_respuesta_id').append('<option value="'+ui.item.id+'">'+ui.item.value+'</option>')
        f_asiganar_respuesta(ui.item.id)
      }
    } );
  } );

</script>   