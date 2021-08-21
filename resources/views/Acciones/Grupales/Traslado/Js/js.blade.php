<script>
  $(document).ready(function(){


    $('#razones').select2({
      language: "es"
    });
    $('#prm_upi_id').select2({
      language: "es"
    });

     $('#prm_trasupi_id').select2({
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


            
            var f_repsable = function(dataxxxx) {
                $.ajax({
                url: "{{ route('traslado.responsa')}}",
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
                  //  alert('Disculpe, existe un problema al buscar el responsable de la upi');
                }
            });
        }
        $('#prm_upi_id').change(function() {
        f_repsable({dataxxxx:{padrexxx:$(this).val(),selected:''}})
        });
        @if(old('prm_upi_id') != null)
        f_repsable({
                dataxxxx: {
                    valuexxx: "{{old('respone_id')}}",
                    campoxxx: 'respone_id',
                    selected: '{{old("prm_upi_id")}}'
            }});
        @endif

        var f_repsabler = function(dataxxxx) {
                $.ajax({
                url: "{{ route('traslado.responsar')}}",
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
                  //  alert('Disculpe, existe un problema al buscar el responsable de la upi');
                }
            });
        }    


        $('#prm_trasupi_id').change(function() {
        f_repsabler({dataxxxx:{padrexxx:$(this).val(),selected:''}})
        });
        @if(old('prm_trasupi_id') != null)
        f_repsabler({
                dataxxxx: {
                    valuexxx: "{{old('responr_id')}}",
                    campoxxx: 'responr_id',
                    selected: '{{old("prm_trasupi_id")}}'
            }});
        @endif
      



            $('#prm_trasupi_id').change(function() {
            f_servicios({
                dataxxxx: {
                    dependen: $(this).val(),
                },
                selected: '',
                routexxx: "{{ route('traslado.servicio')}}"
            })
        });
                @if(old('prm_trasupi_id') !== null)
                    f_servicios({
                        dataxxxx: {
                            dependen: $('#prm_trasupi_id').val(),
                        },
                        selected: "{{old('prm_serv_id')}}",
                        routexxx: "{{ route('traslado.servicio')}}"
                    })
                    @endif
  
  });
  

  init_contadorTa("descripcion", "contadordescripcion", 4000);

  
  
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