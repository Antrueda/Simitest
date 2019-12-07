<script>
$(document).ready(function() {
    $('#{{ $tableName }}').DataTable({
    	"serverSide": true,
    	"ajax": {
			url:"{{ url($todoxxxx['urlxxxxx'])  }}",
			data:{sis_nnaj_id:{{ $todoxxxx['nnajregi'] }} },
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