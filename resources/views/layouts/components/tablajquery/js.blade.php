<script>
$(document).ready(function() {
    $('#{{ $tableName }}').DataTable({
    	"serverSide": true,
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
} );
</script>