<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function() {
        $('.select2').select2({
            language: "es"
        });
        var f_cargos = function (dataxxxx){ 
                $.ajax({
                    url: "{{ route('fosfichaobservacion.obtenerTipoSeguimientos')}}",
                    type: 'GET',
                    data: dataxxxx.dataxxxx,
                    dataType: 'json',
                    success: function (json){
                        $(json.campoxxx).empty();
                        $.each(json.comboxxx, function (id, data) {
                            var selected = '';
                            if (data.valuexxx == dataxxxx.selected) {
                                selected = 'selected';
                            }
                            $(json.campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                        });
                    },
                    error: function (xhr, status) {
                        alert('Disculpe, existe un problema');
                    }
                });
            }

            //Recuperar datos en caso de tener errores en las validaciones
            @if(old('area_id')!=null)
                $("#fos_stse_id").empty();
                f_cargos({
                    selected:'{{ old("fos_tse_id") }}',
                    dataxxxx:{
                        valuexxx:"{{ old('area_id') }}",
                        'tipoxxxx':1
                    }
                });
                @endif
                $("#area_id").change(function(){
                $("#fos_stse_id").empty();
                f_cargos({
                    selected:'',
                    dataxxxx:{
                        valuexxx:$(this).val(),
                        'tipoxxxx':1
                    } 
                });
            });
        });
        

     
</script>
