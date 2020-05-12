<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
   var tablaxxx ='';
$(document).ready(function() {
  tablaxxx =  $('#{{ $tableName }}').DataTable({
      "serverSide": true,
      "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
    	"ajax": {
        url:"{{ url($todoxxxx['urlxxxxx'])  }}",
        @if(isset($todoxxxx['dataxxxx']))
          data:{
            @foreach($todoxxxx['dataxxxx'] as $dataxxxx)
            {{$dataxxxx['campoxxx']}}:"{{$dataxxxx['dataxxxx']}}",
            @endforeach
          }
        @endif
      },
    	"columns":[
			@foreach($todoxxxx['columnsx'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
      @endforeach
    ],
    
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
    });


  
    var campos=function(valuexxx){
    $("#sis_campo_id").empty();
    $.ajax( {
      url : "{{ route('di.campos') }}",
      dataType: "json",
      type : 'POST',
      data: {
        _token: $("input[name='_token']").val(),
        sis_tabla_id:valuexxx,// saber las preguntas que ya se le han asignado al documento
        in_base_fuente_id: {{ $todoxxxx['modeloxx']->id }},
      },
      success: function( data ) {
        $.each(data,function(i,d){
          $("#sis_campo_id").append('<option value="'+d.valuexxx+'">'+d.optionxx+'</option>');
        });
      }
    });
  }
  var f_asiganar_pregunta=function(pregunta){

      $.ajax( {
        url : "{{ route('ajaxx.signapregunta') }}",
        dataType: "json",
        type : 'POST',
        data: {
          _token: $("input[name='_token']").val(),
          in_pregunta_id: pregunta,
          in_ligru_id: {{ $todoxxxx['modeloxx']->id }},
          sis_tabla_id: $('#sis_tabla_id').val(),
          sis_campo_tabla_id: $('#sis_campo_id').val()

        },
        success: function( data ) {
          tablaxxx.ajax.reload();
          campos($('#sis_tabla_id').val());
        },
        error : function(xhr, status) {
          alert('No se pudo asignar la pregunta seleccionada');
        },
      });

  }
    $("#pregunta_select").autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url : "{{ route('ajaxx.preguntas') }}",
          dataType: "json",
           type : 'POST',
          data: {
            _token: $("input[name='_token']").val(),
            document:{{ $todoxxxx['modeloxx']->id }},// saber las preguntas que ya se le han asignado al documento
            buscarxx: request.term,
          },
          success: function( data ) {
            if($('#sis_campo_id').val()==''){
              alert('no ha seleccionado un campo')
              $('#pregunta_select').val('')
              return false;
            }

              response( data[0] );


          }
        } );
      },
      close:function(){
             this.value=''
         },
      minLength: 0,
      select: function( event, ui ) {
        $('#in_pregunta_id').append('<option value="'+ui.item.id+'">'+ui.item.value+'</option>')
        f_asiganar_pregunta(ui.item.id)
      }
    } );


      $('#sis_tabla_id').change(function(){
        campos($(this).val());
      });
    



} );
$(function(){
  $('#{{ $tableName }} tbody').on( 'click', 'tr', function () {
  
        if ( $(this).hasClass('btn-success') ) {
            $(this).removeClass('btn-success');
        }
        else { 
          tablaxxx.$('tr.btn-success').removeClass('odd btn-success');
            $(this).addClass('btn-success');
        }
    } );

});
</script>