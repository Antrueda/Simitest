<script>
    $(function() {
        var f_campos = function(dataxxxx) {
            $.ajax({
                url: "{{ route($todoxxxx['routxxxx'].'.reculist',$todoxxxx['parametr'][0]) }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    if (dataxxxx.campoxxx == 'i_prm_trecurso_id') {
                        $(json.campoxxx).empty();
                        $.each(json.comboxxx, function(i, d) {
                            $(json.campoxxx).append('<option ' + d.selected + ' value="' + d.valuexxx + '">' + d.optionxx + '</option>');
                        });
                    }else{
                        $(json.campoxxx).text(json.dataxxxx);
                    }

                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al cargar los recursos');
                },
            });
        }

        @if(old('area_id') != null)
        f_campos({
            {
                old('area_id')
            }
        }, {
            {
                old('in_indicador_id')
            }
        }, 1);
        @endif
        $('.recursos').change(function() {
            f_campos({
                padrexxx: $(this).val(),
                selected: [0],
                campoxxx: $(this).prop('id')
            });
        });
    });
</script>
