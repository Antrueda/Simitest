<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

$(document).ready(function() {

  var f_cargos = function(dataxxxx) {
            $.ajax({
                url: "{{ route('firazones.cargos',$todoxxxx['usuariox'])}}",
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
        @if(old('userd_id') != null)) f_cargos({
        dataxxxx: {
            valuexxx: {
                {
                    old('userd_id')
                }
            },
            campoxxx: 'userd_id',
            selected: '{{old("sis_depend_id")}}'
        }); @endif @if(old('userr_id') != null)) f_cargos({
            dataxxxx: {
                valuexxx: {
                    {
                        old('userr_id')
                    }
                },
                campoxxx: 'userr_id',
                selected: '{{old("sis_depenr_id")}}'
            }); @endif $('.cargos').change(function() {
            f_cargos({
                dataxxxx: {
                    valuexxx: $(this).val(),
                    campoxxx: $(this).prop('id')
                },
                selected: ''
            });
        }); 


         $("#i_primer_responsable").change(function() {
            $.ajax({
                url: "{{ route('is.intervencion.responsable',$todoxxxx['usuariox'])}}",
                type: 'GET',
                data: {
                    comboxxx:$(this).prop('id'),
                    usernotx:$(this).val()
                },
                dataType: 'json',
                success: function(json) {
                    $(json.comboxxx).empty();
                    $.each(json.dataxxxx, function(id, data) {
                        $(json.comboxxx).append('<option value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existe un problema al seleccionar el responsable');
                }
            });
        });
        @if(old('i_primer_responsable')!=null)
        f_cargos({{ old('i_primer_responsable') }},{{ old('i_segundo_responsable')  }},1);
        @endif
     });
  });



  function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }

  function soloNumeros(e) {
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
      return true;
    return /\d/.test(String.fromCharCode(keynum));
  }

</script>
