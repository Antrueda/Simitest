<script>
$(document).ready(function() {
    $('#{{ $todoxxxx["tablname"] }}').DataTable({
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
} );
</script>