<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function() {
       var f_campos=function(valuexxx,psalecte,optionxx,campoxxx){
            $('#sis_actividad_id').empty();
            $.ajax({
                url : "{{ route('ajaxx.acciongestion') }}",
                data : {
                    padrexxx:valuexxx,
                    optionxx:optionxx,
                },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $.each(json,function(i,d){
                        var selected='';
                        if(psalecte==d.valuexxx){
                            selected='selected';
                        }
                        $('#'+campoxxx).append('<option '+selected+' value="'+d.valuexxx+'">'+d.optionxx+'</option>');
                    });
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        @if(old('sis_documento_fuente_id')!=null)
            f_campos({{ old('sis_documento_fuente_id') }}, {{ old('sis_actividad_id') }}, 1, 'sis_actividad_id');
        @endif
        $('#sis_documento_fuente_id').change(function() {
            f_campos($(this).val(), '', 1, 'sis_actividad_id');
        });

    });
</script>
