<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    function soloNumeros(e){
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
    $(document).ready(function() {
    $('#{{ $todoxxxx["tablname"] }}').DataTable({
    	"serverSide": true,
		"ajax":
		{
			url:"{{ url($todoxxxx['urlxxxxx'])  }}",
			data:{sis_nnaj_id:{{ $todoxxxx['nnajregi'] }}}
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