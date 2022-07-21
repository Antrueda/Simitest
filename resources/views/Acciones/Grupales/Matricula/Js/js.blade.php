<script>
  $(document).ready(function(){
    $('#prm_upi_id,#user_doc1').select2({
      language: "es"
    });
    $('#apoyo_id').select2({
      language: "es"
    });
    $('#user_doc2').select2({
      language: "es"
    });
    var f_repsable = function(dataxxxx) {
        $.ajax({
                url: "{{ route('imatricula.responsable')}}",
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
                    padrexxx: '{{old("prm_upi_id")}}'
            }});
        @endif
        let f_sis_entidad = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#prm_upi_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("imatricula.servicio") }}',
                campoxxx: 'prm_serv_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }
        $('#prm_upi_id').change(() => {
            f_sis_entidad(0);
        });


        var f_grado = function(selected, upixxxxx,padrexxx) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    cabecera: true,
                    upixxxxx: upixxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("imatricula.grado") }}',
                campoxxx: 'prm_grado',
                mensajex: 'Exite un error al cargar los grados'
            }
            f_comboGeneral(dataxxxx);
        }
        var f_grupo = function(selected, upixxxxx,padrexxx) {
           
            let dataxxxx = {
                dataxxxx: {
                    padrexxx:padrexxx,
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

        let dependen = '{{old("prm_upi_id")}}';
        if (dependen !== '') {
            f_sis_entidad('{{old("prm_serv_id")}}');
        }
      
        $('#prm_serv_id').change(() => {
            let upixxxxx = $('#prm_upi_id').val();
            let servicio = $('#prm_serv_id').val();
            let cabecera = true
            f_grado(0,upixxxxx,servicio);
            f_grupo(0,upixxxxx,servicio);
        });

        let servicio = '{{old("prm_serv_id")}}';
        if (servicio !== '') { 
            let upixxxxx = $('#prm_upi_id').val();
            let gradoxxx='{{old("prm_grado")}}';
            let grupoxxx='{{old("prm_grupo")}}';
            f_grado(gradoxxx,upixxxxx,servicio);
            f_grupo(grupoxxx,upixxxxx,servicio);
            
        }
     
  });


  
  
  
  

  init_contadorTa("observaciones", "contadorobservaciones", 500);

  
  
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

window.onload = updateContadorTa();
</script>