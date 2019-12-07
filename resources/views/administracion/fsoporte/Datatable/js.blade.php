<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
$(document).ready(function() {
	(!isset($todoxxxx['actualiz']))
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
} );
</script>

