<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){     
        $("#sis_entidad_id").change(function(){   
            $("#sis_servicio_id").empty();
            $("#sis_servicio_id").append('<option value="">Seleccione</>')
            if($(this).val()!=''){
                $.ajax({
                url : "{{ route('ajaxx.servicios') }}",
                data : {
                        _token: $("input[name='_token']").val(),
                        'padrexxx':$(this).val()
                    },
                type : 'POST',
                dataType : 'json',
                success : function(json) {
                    $.each(json.servicio,function(i,data){                            
                        $('#sis_servicio_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    }); 
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
        });
    });
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