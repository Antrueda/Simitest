<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

$(function() {
    
  var f_asiganar_pregunta=function(hijoxxxx){

      $.ajax( {
        url : "{{ route('bd.basedocumen.asignarlineabase') }}",
        dataType: "json",
        type : 'POST',
        data: {
          _token: $("input[name='_token']").val(),
          sis_documento_fuente_id: hijoxxxx,
          in_fuente_id: {{ $todoxxxx['modeloxx']->id }}

        },
        success: function( data ) {
          
        },
        error : function(xhr, status) {
          alert('No se pudo asignar la pregunta seleccionada');
        },
      });
    
  }  
    $("#sis_documento_fuente_select").autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url : "{{ route('bd.basedocumen.documentos') }}",
          dataType: "json",
           type : 'POST',
          data: {
            _token: $("input[name='_token']").val(),
            padrexxx:{{ $todoxxxx['modeloxx']->id }},// saber las preguntas que ya se le han asignado al documento
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
        $('#sis_documento_fuente_id').append('<option value="'+ui.item.id+'">'+ui.item.value+'</option>')
        f_asiganar_pregunta(ui.item.id)
      }
    } );
  } );

</script>   