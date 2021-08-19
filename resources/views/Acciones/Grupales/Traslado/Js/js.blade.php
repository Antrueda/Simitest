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
        let traslado = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#remision_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("traslado.traslado") }}',
                campoxxx: 'tipotras_id',
                generalx: 2641,
                compartx: 2642,
                mensajex: 'Exite un error al cargar tipo de traslados'
            }
            f_comboGeneral(dataxxxx);
        }
        let accionxx = '{{old("remision_id")}}';
        if (accionxx !== '') {
            traslado('{{old("tipotras_id")}}');
        }

        $('#remision_id').change(() => {
            traslado(0);
        });



            var foreachx=function(comboxxx){
                $('#'+comboxxx[0]).empty();
                $.each(comboxxx[1],function(i,data){
                    $('#'+comboxxx[0]).append('<option value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                });
            }

            var f_combo=function(dataxxxx){
            $.ajax({
                url: "{{ route('traslado.egreso')}}",
                data :dataxxxx.dataxxxx,
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    $('#'+json.cuidador[0]+' option:selected').removeAttr( "selected" )
                    $('#'+json.enfermer[0]+' option:selected').removeAttr( "selected" )
                    $('#'+json.docentex[0]+' option:selected').removeAttr( "selected" )
                    $('#'+json.piscoxxx[0]+' option[value='+json.piscoxxx[2]+']').attr('selected', 'selected');
                    $('#'+json.auxiliar[0]+' option[value='+json.auxiliar[2]+']').attr('selected', 'selected');
                    foreachx(json.cuidador)
                    foreachx(json.enfermer)
                    foreachx(json.docentex)
                    foreachx(json.piscoxxx)
                    foreachx(json.auxiliar)
                    
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
            }
            $('#prm_upi_id').change(() => {
                f_combo({dataxxxx:{padrexxx:$('#prm_upi_id').val(),selected:''}})
                });

       
        

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
      //

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




                var f_upiservicio = function(dataxxxx) {
                $.ajax({
                url: "{{ route('traslado.upiservicio')}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) { 
                    $('#prm_trasupi_id').empty();
                    $.each(json.comboxxx, function(id, data) {
                        $('#prm_trasupi_id').append('<option ' + data.selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                  //  alert('Disculpe, existe un problema al buscar el responsable de la upi');
                }
            });
        }
         $('#prm_upi_id').change(function() {
             if($('#remision_id').val()>0){
                f_upiservicio({dataxxxx:{padrexxx:$(this).val(),selected:[0],remision:$('#remision_id').val()}})
                
             }else{
                alert('Disculpe, debe seleccionar un tipo de remisión');
             }
        
        });
        @if(old('prm_upi_id') != null)
        f_upiservicio({
                dataxxxx: {
                    valuexxx: "{{old('prm_trasupi_id')}}",
                    campoxxx: 'prm_trasupi_id',
                    selected: '{{old("prm_upi_id")}}'
            }});
            f_combo({dataxxxx:{padrexxx:$('#prm_upi_id').val(),selected:''}});
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