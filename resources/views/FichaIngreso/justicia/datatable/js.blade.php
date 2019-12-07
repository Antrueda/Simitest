<script>
$(document).ready(function() {
    $('#{{ $todoxxxx["tablname"] }}').DataTable({
    	"serverSide": true,
		"ajax":
		{
			url:"{{ url($todoxxxx['urlxxxxx'])  }}",
			data:{sis_nnaj_id:{{ $todoxxxx['modeloxx']->sis_nnaj_id }}}
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
} );

</script>
@include('FichaIngreso.justicia.formulario.js')