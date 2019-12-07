

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        // dataxxxx={
        //     valuexxx:'', // valor del padre seleccionado
        //     selected:''
        // }
        var getEscnna=function(dataxxxx){
            
            $("#i_prm_victima_escnna_id").empty();
            $.ajax({
                url : "{{ route('fi.situacion.getEscnna',$todoxxxx['nnajregi']) }}",
                data : {                       
                        'padrexxx':dataxxxx.valuexxx,
                        'selected':dataxxxx.selected,
                    },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    
                    $.each(json.escnnaxx,function(i,data){
                        $('#i_prm_victima_escnna_id').append('<option '+data.selected+'  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        
        @if(old('i_prm_tipo_id')!=null) 
        var victimax=[@foreach (old("i_prm_victima_escnna_id") as $situacx)
              {{ $situacx }},
            @endforeach ];
      
            getEscnna({valuexxx:{{ old('i_prm_tipo_id') }},selected:victimax })
        @endif
        
        $("#i_prm_tipo_id").change(function(){           
            getEscnna({valuexxx:$(this).val(),selected:''})
        });

        

    });


</script>    
