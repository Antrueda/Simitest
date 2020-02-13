<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
$(document).ready(function() {
	

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
	var responsa=$('#responsables').DataTable({
    	"serverSide": true,
        "ajax": {
            url:"{{ url($todoxxxx['urlxxxag'])  }}",
            data:{
                ag_actividad_id:{{ $todoxxxx['modeloxx']->id }}
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
    $("#responsablesf").autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url : "{{ route('ajaxx.responsable') }}",
          dataType: "json",
           type : 'GET',
          data: {
			   buscarxx: request.term,
			   ag_actividad_id:{{ $todoxxxx['modeloxx']->id }}
          },
          success: function( data ) { console.log(data)
			if($('#i_prm_responsable_id').val()==''){
			alert('No ha seleccionado un campo')
			$('#responsablesf').val('')
			return false;
			}
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
			i_prm_responsable_id:$('#i_prm_responsable_id').val(),
			user_id:ui.item.id,
			tipoxxxx:1,
			ag_actividad_id:"{{ $todoxxxx['modeloxx']->id }}"
		},responsa);
      }
	} );
	

	$("#myBtnx").click(function(){
    $("#myModalx").modal();
  	});
	var asistent=$('#asistentes').DataTable({
    	"serverSide": true,
        "ajax": {
            url:"{{ url($todoxxxx['urlxxxas'])  }}",
            data:{
                ag_actividad_id:{{ $todoxxxx['modeloxx']->id }}
            }
        }
        
        ,
    	"columns":[
			@foreach($todoxxxx['columnas'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
    });  
    
    $("#asistentess").autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url : "{{ route('ajaxx.asistente') }}",
          dataType: "json",
           type : 'GET',
          data: {
			   buscarxx: request.term,
			   ag_actividad_id:{{ $todoxxxx['modeloxx']->id }}
          },
          success: function( data ) {
            // if($('#sis_campo_id').val()==''){
            //   alert('no ha seleccionado un campo')
            //   $('#pregunta_select').val('')
            //   return false;
            // }
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
			fi_dato_basico_id:ui.item.id,
			tipoxxxx:2,
			ag_actividad_id:"{{ $todoxxxx['modeloxx']->id }}"
		},asistent);
      }
	} );
	

	$("#myBtnxx").click(function(){
    $("#myModalxx").modal();
  	});
	var recursox=$('#relacion').DataTable({
    	"serverSide": true,
        "ajax": {
            url:"{{ url($todoxxxx['urlxxxre'])  }}",
            data:{
                ag_actividad_id:{{ $todoxxxx['modeloxx']->id }}
            }
        },
    	"columns":[
			@foreach($todoxxxx['columnre'] as $columnsx)
			{data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
	});  
    $("#relacionn").autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url : "{{ route('ajaxx.relacion') }}",
          dataType: "json",
           type : 'GET',
          data: {
			   buscarxx: request.term,
			   ag_actividad_id:{{ $todoxxxx['modeloxx']->id }}
          },
          success: function( data ) { console.log(data)
			if($('#i_cantidad').val()==''){
			alert('No ha ingresado una cantidad')
			$('#relacionn').val('')
			return false;
			}
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
			i_cantidad:$('#i_cantidad').val(),
			ag_recurso_id:ui.item.id,
			tipoxxxx:3,
			ag_actividad_id:"{{ $todoxxxx['modeloxx']->id }}"
		},recursox);
      }
    } );
    
  var f_eliminar = function(dataxxxx,datatabl){
    $.ajax( {
      url : "{{ route('ag.acti.actividad.getEliminar') }}",
      dataType: "json",
      type : 'GET',
      data: dataxxxx,
      success: function( data ) { 
        datatabl.ajax.reload();
      }
    });
  }
  /**
   * eliminar responsable
  */
  // $('#responsables').on('click','.responsa',function(){
  //   f_eliminar({padrexxx:$(this).prop('id')},responsa)
  // });
});
</script>