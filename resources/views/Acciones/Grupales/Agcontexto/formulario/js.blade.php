<script>
   $(function(){
        var f_campos=function(valuexxx,psalecte,optionxx){
            if(valuexxx!=''){
                $.ajax({
                    url : "{{ route('ajaxx.indicadores') }}",
                    data : { 
                        _token: $("input[name='_token']").val(),
                        padrexxx:valuexxx,
                        optionxx:optionxx,
                    },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        $.each(json.indicado,function(i,d){
                            var selected='';
                            if(psalecte==d.valuexxx){
                                selected='selected';
                            }
                            $('#in_indicador_id').append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
            
        }
        $('#sis_esta_id').change(function() {
            f_motivos({
                dataxxxx: {
                    estadoid: $(this).val(),
                },
                selected: '',
                routexxx: "{{ route('agtema.motivosx')}}"
            })
        });

        @if(old('sis_esta_id') !== null)
        f_motivos({
            dataxxxx: {
                estadoid: $('#sis_esta_id').val(),
            },
            selected: "{{old('estusuario_id')}}",
            routexxx: "{{ route('agtema.motivosx')}}"
        })
        @endif
        @if(old('area_id')!=null)
        f_campos({{ old('area_id') }},{{ old('in_indicador_id')  }},1);
        @endif
        $('#area_id').change(function(){
            $('#in_indicador_id').empty();
            $('#in_indicador_id').append('<option value="">Seleccione</option>');
            f_campos($(this).val(),'',1);

        });
    });

    
</script>   