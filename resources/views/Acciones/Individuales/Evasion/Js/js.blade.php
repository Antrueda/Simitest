<script>
  $(document).ready(function(){
    $('#prm_familiar1_id').select2({
      language: "es"
    });
    $('#prm_familiar2_id').select2({
      language: "es"
    });
    $('#user_doc1_id').select2({
      language: "es"
    });
    $('#user_doc2_id').select2({
      language: "es"
    });
    $('#responsable').select2({
      language: "es"
    });
        var f_combo = function(dataxxxx, campoxxx) {
            $("#" + campoxxx).empty();
            $.each(dataxxxx, function(i, data) {
                $("#" + campoxxx).append('<option ' +
                    data.selected + ' value="' +
                    data.valuexxx + '">' +
                    data.optionxx + '</option>')
            });
        }
        var f_municipos = function(valuexxx, campoxxx, selected) {
                  $.ajax({
                      url: "{{ route('ajaxx.gmunicipios') }}",
                      data: {
                          padrexxx: valuexxx,
                          pselecte: selected,
                          campoxxx: campoxxx
                      },
                      type: 'GET',
                      dataType: 'json',
                      success: function(json) {
                          f_combo(json[0], json[1]);
                      },
                      error: function(xhr, status) {
                          alert('Disculpe, existió un problema');
                      },
                  });
                  }
                  $('#departamento_id').change(function() {
                  f_municipos($(this).val(), 'municipio_id', '');
                  });
                  var deptcond = "{{old('departamento_id')}}";

                  if (deptcond != '') {
                  f_municipos('{{ old("departamento_id") }}',
                      'municipio_id',
                      '{{ old("municipio_id") }}');
                  }
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
                    alert('Disculpe, existe un problema as buscar el responsable de la upi');
                }
            });
        }
        var f_direccion = function(dataxxxx) {
                 $.ajax({
                url: "{{ route('aievasion.direccion')}}",
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
                    alert('Disculpe, existe un problema as buscar el responsable de la upi');
                }
            });
        }
        $('#prm_upi_id').change(function() {
          f_repsable({dataxxxx:{padrexxx:$(this).val(),selected:''}})
        });
        $("#s_doc_adjunto_ar").change(function() {
            var fichero_seleccionado = $(this).val();
            var nombre_fichero_seleccionado = fichero_seleccionado.replace(/.*[\/\\]/, ''); //Eliminamos el path hasta el fichero seleccionado
            $("#s_doc_adjunto_ar_label").text(nombre_fichero_seleccionado);
        });
        
  

  function doc(valor){
    if(valor == 228){
      document.getElementById("tintura").hidden=true;
      document.getElementById("tintura").value='';
    } else {
      document.getElementById("tintura").hidden=false;
    }
  }

  function doc1(valor){
    if(valor != 1459){
      document.getElementById("prm_corCabello_id").hidden=false;
    } else {
      document.getElementById("prm_corCabello_id").hidden=true;
      document.getElementById("prm_corCabello_id").value='';
    }
  }

  function doc2(valor){
    if(valor == 228){
      document.getElementById("cuantos").hidden=true;
      document.getElementById("cuantos").value='';
      document.getElementById("prm_tamlunar_id").hidden=true;
      document.getElementById("prm_tamlunar_id").value='';
      
    } else {
      document.getElementById("cuantos").hidden=false;
      document.getElementById("prm_tamlunar_id").hidden=false;
    }
  }

  function doc3(valor){
    if (valor == 228) {
      document.getElementById("prm_llamada_id").hidden=true;
      document.getElementById("prm_llamada_id").value='';
      document.getElementById("radicado").hidden=true;
      document.getElementById("radicado").value='';
      document.getElementById("recibe_denuncia").hidden=true;
      document.getElementById("recibe_denuncia").value='';
    
} else {
      document.getElementById("prm_llamada_id").hidden=false;
      document.getElementById("radicado").hidden=false;
      document.getElementById("recibe_denuncia").hidden=false;

      
    }
  }

  function cambiaDepartamento(departamento){
    if (departamento !== '') {
      mi_ciudad=eval("depa_" + departamento);
      num_ciudad = mi_ciudad.length;
      document.forma.municipio_id.length = num_ciudad;
      for(i=0;i<num_ciudad;i++){
        document.forma.municipio_id.options[i].value=mi_ciudad[i][0];
        document.forma.municipio_id.options[i].text=mi_ciudad[i][1];
      }
    }else{
      document.forma.municipio_id.length = 1;
      document.forma.municipio_id.options[0].value = "1";
      document.forma.municipio_id.options[0].text = "NO APLICA";
    }
    document.forma.municipio_id.options[0].selected = true;
  }



init_contadorTa("senias", "contadorsenias", 4000);
init_contadorTa("circunstancias", "contadorcircunstancias", 4000);
init_contadorTa("observaciones_fam", "contadorobservaciones", 4000);



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