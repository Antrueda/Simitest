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
        var regisalu = function(valuexxx, selectep) {
            $("#entidad_id").empty();
            $.ajax({
                url: "{{ route('ajaxx.regimensalud') }}",
                data: {
                    _token: $("input[name='_token']").val(),
                    'padrexxx': valuexxx
                },
                type: 'POST',
                dataType: 'json',
                success: function(json) {
                    $.each(json[0].entidadx, function(i, data) {
                        var selected = '';
                        if (selectep == data.valuexxx) {
                            selected = 'selected';
                        }
                        $('#entidad_id').append('<option ' + selected + '  value="' + data.valuexxx + '">' + data.optionxx + '</option>')

                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var prmresal = "{{old('afili_id')}}";
        if (prmresal != '') {
            regisalu(prmresal, "{{old('entidad_id')}}");
        }
        $("#afili_id").change(function() {
            regisalu($(this).val(), '');
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
        $('#prm_upi_id').change(function() {
          f_repsable({dataxxxx:{padrexxx:$(this).val(),selected:''}})
        });
        @if(old('prm_upi_id') != null)
             f_repsable({
                dataxxxx: {
                    valuexxx: "{{old('responsable')}}",
                    campoxxx: 'responsable',
                    selected: '{{old("prm_upi_id")}}'
            }});
        @endif
  });
init_contadorTa("motivoval", "contadormotivoval", 4000);
init_contadorTa("recomenda", "contadorrecomenda", 4000);


function init_contadorTa(idtextarea, idcontador, max) {
    $("#" + idtextarea).keyup(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
    $("#" + idtextarea).change(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
}

function updateContadorTa(idtextarea, idcontador, max) {
    var contador = $("#" + idcontador);
    var ta = $("#" + idtextarea);
    contador.html("0/" + max);
    contador.html(ta.val().length + "/" + max);
    if (parseInt(ta.val().length) > max) {
        ta.val(ta.val().substring(0, max - 1));
        contador.html(max + "/" + max);
    }

}

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
