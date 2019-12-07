<script>
$(document).ready(function() {
    $('#{{ $todoxxxx["tablname"] }}').DataTable({
    	"serverSide": true,
		
    	"ajax": {
			url:"{{ url($todoxxxx['urlxxxxx'])  }}",
			data:{
           		 nnajxxxx:{{ $todoxxxx['nnajregi'] }}
        	},

		},
    	"columns":[
			@foreach($todoxxxx['columnsx'] as $columnsx)
			{data:'{{ $columnsx["data"] }}'},
			@endforeach
		],
    	"language": {
           	"url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
       	}
    });
} );
</script>