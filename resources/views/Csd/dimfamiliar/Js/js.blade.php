<script>
    $(document).ready(function() {
      $('#antecedentes').select2({
        language: "es"
      });
      $('#problemas').select2({
        language: "es"
      });
      $('#normas').select2({
        dropdownParent: $('#normas_div'),
        language: "es"
      });
      $('#establecen').select2({
        dropdownParent: $('#establecen_div'),
        language: "es"
      });
      $('#incumple').select2({
        language: "es"
      });
      $('#prm_jefea_id').select2({
        language: "es"
      });
      $('#prm_jefeb_id').select2({
        language: "es"
      });
      $('#prm_cuidador_id').select2({
        language: "es"
      });
      $("#s_doc_adjunto_ar").change(function() {
            var fichero_seleccionado = $(this).val();
            var nombre_fichero_seleccionado = fichero_seleccionado.replace(/.*[\/\\]/, ''); //Eliminamos el path hasta el fichero seleccionado
            $("#s_doc_adjunto_ar_label").text(nombre_fichero_seleccionado);
        });
        $('#normas').change(function() {
        f_comboSimple({
            dataxxxx: {
                padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                selectxx: $(this).prop('id'),
            },
            urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
            msnxxxxx:"Disculpe, existió un problema al armar el combo"
        });

    });

  });
    function doc(valor) {
      if(valor == 227){
            document.getElementById("prm_traslado_id").hidden=true;
        } else {
            document.getElementById("prm_traslado_id").hidden=false;
        }
    }

    function doc1(valor) {
      if (valor == 227) {
        document.getElementById("prm_conoce_id").hidden=false;
        document.getElementById("normas_div").hidden=false;
        document.getElementById("establecen_div").hidden=false;
        document.getElementById("prm_actuan_id").hidden=false;
        document.getElementById("porque").hidden=false;
        document.getElementById("observacion").hidden=false;
      } else {
        document.getElementById("prm_conoce_id").hidden=true;
        document.getElementById("normas_div").hidden=true;
        document.getElementById("establecen_div").hidden=true;
        document.getElementById("prm_actuan_id").hidden=true;
        document.getElementById("porque").hidden=true;
        document.getElementById("observacion").hidden=true;
      }
    }

    function doc2(valor) {
      if(valor != '') {
          document.getElementById("prm_hogar_id").hidden=true;
          document.getElementById("prm_hogar_id").value = '';
      } else {
          document.getElementById("prm_hogar_id").hidden=false;
      }
  }
  function doc3(valor) {
      if(valor != '') {
          document.getElementById("prm_familiar_id").hidden=true;
          document.getElementById("prm_familiar_id").value = '';
      } else {
          document.getElementById("prm_familiar_id").hidden=false;
      }
  }

    function carga() {
      doc(document.getElementById('prm_bogota_id').value);
      doc1(document.getElementById('prm_norma_id').value);
      doc2(document.getElementById('prm_familiar_id').value);
      doc3(document.getElementById('prm_hogar_id').value);

    }

    function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toString();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ"; //Se define todo el abecedario que se quiere que se muestre.
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

    init_contadorTa("descripcionb", "contadordescripcion1", 4000);
    init_contadorTa("descripcionc", "contadordescripcion2", 4000);
    init_contadorTa("observacion", "contadorobservacion", 4000);
    init_contadorTa("porque", "contadorporque", 4000);
    init_contadorTa("descripcion", "contadordescripcion", 4000);
    init_contadorTa("relevantes", "contadorrelevantes", 4000);
    init_contadorTa("descripciona", "contadordescripciona", 4000);
    init_contadorTa("afronta", "contadorafronta", 4000);


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

    window.onload = carga;

  </script>
