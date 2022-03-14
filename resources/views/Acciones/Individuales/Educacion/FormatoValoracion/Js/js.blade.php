<script>
  $(document).ready(function(){
    $('#prm_upi_id').select2({
      language: "es"
    });
    $('#objetivo').select2({
      language: "es"
    });
    $('#prm_parentezco2_id').select2({
      language: "es"
    });
    $('#prm_upi2_id').select2({
      language: "es"
    });
    $('#user_doc1_id').select2({
      language: "es"
    });
    var f_cargos = function(dataxxxx) {
            $.ajax({
                url: "{{ route('aisalidamenores.cargos',$todoxxxx['usuariox']->id)}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) {
                    $(json.campoxxx).empty();
                    $(json.campcarg).text(json.cargoxxx);
                    $.each(json.comboxxx, function(id, data) {
                        var selected = '';
                        if (data.valuexxx == dataxxxx.selected) {
                            selected = 'selected';
                        }
                        $(json.campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existe un problema');
                }
            });
        }

        @if(old('sis_depend_id') != null)
            f_cargos({
                dataxxxx: {
                    valuexxx: "{{old('userr_id')}}",
                    campoxxx: 'userr_id',
                    selected: '{{old("sis_depend_id")}}'
            }});
        @endif
        $('.cargos').change(function() {
            f_cargos({
                dataxxxx: {
                    valuexxx: $(this).val(),
                    campoxxx: $(this).prop('id')
                },
                selected: ''
            });
        });



        $('#s_documento').mask('000000000000');
        $('#s_documento_responsable').mask('000000000000');
        var f_repsable = function(dataxxxx) {
            $.ajax({
                url: "{{ route('aisalidamenores.responsa')}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) { 
                    $(json.campoxxx).empty();
                    $.each(json.comboxxx, function(id, data) { console.log(data)
                        $(json.campoxxx).append('<option ' + data.selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                   // alert('Disculpe, existe un problema al buscar el responsable de la upi');
                }
            });
        }

        $('#conocimiento').keyup(function() {
            let conoci = parseFloat($('#conocimiento').val()) *  2;
            $("#conoci").val(conoci);
            });

            $('#desempeno').keyup(function() {
            let desemp = parseFloat($('#desempeno').val()) *  6;
            $("#desemp").val(desemp);
            });
            $('#producto').keyup(function() {
            let producto = parseFloat($('#producto').val()) *  2;
            $("#product").val(producto);
            });
            $('#concepto').on('click', function() {
            let conoci = parseFloat($('#conoci').val());
            let desemp = parseFloat($('#desemp').val());
            let producto = parseFloat($('#product').val());
            let total = conoci+desemp+producto
            if(total>=70){
                $("#concepto").val("COMPETENTE");
            }else{
                $("#concepto").val("NO COMPETENTE");
            }
           
            });
  });

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
