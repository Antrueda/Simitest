<script>
  $(document).ready(function(){


    $('#prm_upi_id').select2({
      language: "es"
    });
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
                    valuexxx: "{{old('responsable')}}",
                    campoxxx: 'responsable',
                    selected: '{{old("prm_upi_id")}}'
            }});
        @endif
        let f_sis_entidad = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#prm_upi_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("actaencu.servicio") }}',
                campoxxx: 'prm_serv_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }

        let dependen = '{{old("prm_upi_id")}}';
        if (dependen !== '') {
            f_sis_entidad('{{old("prm_serv_id")}}');
            
        }
        $('#prm_upi_id').change(() => {
            f_sis_entidad(0);
        });


        var f_grado = function(selected, upixxxxx) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#prm_serv_id').val(),
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("imatricula.grado") }}',
                campoxxx: 'prm_grado',
                mensajex: 'Exite un error al cargar los grados'
            }
            f_comboGeneral(dataxxxx);
        }


        let padrexxx = '{{old("prm_serv_id")}}';
        let upixxxxx = '{{old("sis_upz_id")}}';
        
        let gradoxxx = '{{old("prm_serv_id")}}';
        if (gradoxxx !== '') {
            f_sis_entidad('{{old("prm_grado")}}');
            
        }

        $('#prm_serv_id').change(() => {
            let upixxxxx = $('#prm_upi_id').val();
            let cabecera = true
            f_grado(0, upixxxxx,cabecera);
        });
        


        var f_grupo = function(selected, upixxxxx) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#prm_serv_id').val(),
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("imatricula.grupo") }}',
                campoxxx: 'prm_grupo',
                mensajex: 'Exite un error al cargar los grados'
            }
            f_comboGeneral(dataxxxx);
        }


        
        let grupoxxx = '{{old("prm_serv_id")}}';
        if (grupoxxx !== '') {
            f_grupo('{{old("prm_grupo")}}');
            
        }

        $('#prm_serv_id').change(() => {
            let upixxxxx = $('#prm_upi_id').val();
            let cabecera = true
            f_grupo(0, upixxxxx,cabecera);
        });
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

</script>