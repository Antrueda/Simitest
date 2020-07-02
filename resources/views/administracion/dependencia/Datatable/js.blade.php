<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
$(document).ready(function() {
	@if(!isset($todoxxxx['actualiz']))
    $('#{{ $tableName }}').DataTable({
    	"serverSide": true,
    	"ajax": "{{ url($todoxxxx['urlxxxxx'])  }}",
    	"columns":[
			@foreach($todoxxxx['columnsx'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
	});  
	@else

	f_asiganar_registro=function(dataxxxx,datatabl){
		$.ajax( {
          url : "{{ route('ajaxx.asigregistro') }}",
          dataType: "json",
           type : 'GET',
          data: dataxxxx,
          success: function( data ) { 
			datatabl.ajax.reload();
          }
        } );
	}
	var responsa=$('#sisservicios').DataTable({
    	"serverSide": true,
    	"ajax": {url:"{{ url($todoxxxx['urlxxxag'])  }}",
			data: {
				sis_dependencia_id:{{ $todoxxxx['modeloxx']->id }}
			}
		},
    	"columns":[
			@foreach($todoxxxx['columnag'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
	});
    $("#sisservicio").autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url : "{{ route('ajaxx.sisservicio') }}",
          dataType: "json",
           type : 'GET',
          data: {
			   buscarxx: request.term,
			   sis_dependencia_id:{{ $todoxxxx['modeloxx']->id }}
          },
          success: function( data ) { 
              response( data );
          }
        } );
      },
      close:function(){
             this.value=''
         },
      minLength: 0,
      select: function( event, ui ) {
		f_asiganar_registro({
			sis_servicio_id:ui.item.id,
			tipoxxxx:4,
			sis_dependencia_id:"{{ $todoxxxx['modeloxx']->id }}"
		},responsa);
      }
	} );

	var asistent=$('#personals').DataTable({
    	"serverSide": true,
    	"ajax":{url:"{{ url($todoxxxx['urlxxxas'])  }}",
			data: {
				dependen:{{ $todoxxxx['modeloxx']->id }}
			}
		},
    	"columns":[
			@foreach($todoxxxx['columnas'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
	});  
    $("#personal").autocomplete({
      	source: function( request, response ) {
			$.ajax( {
				url : "{{ route('ajaxx.personal') }}",
				dataType: "json",
				type : 'GET',
				data: {
					buscarxx: request.term,
					sis_dependencia_id:{{ $todoxxxx['modeloxx']->id }}
				},
				success: function( data ) {
					response( data );
				}
			} );
		},
      	close:function(){
            this.value=''
        },
		minLength: 0,
		select: function( event, ui ) {
			f_asiganar_registro({
				user_id:ui.item.id,
				tipoxxxx:5,
				sis_dependencia_id:"{{ $todoxxxx['modeloxx']->id }}",
				responsable:$('#i_prm_condicional_id').val(),
			},asistent);
		}
	});
	@endif
} );
</script>