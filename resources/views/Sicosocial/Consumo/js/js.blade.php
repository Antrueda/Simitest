<script>
  $(document).ready(function(){
    $('#expectativas').select2({
      dropdownParent: $('#expectativas_div'),
      language: "es"
    });
    $('#quienes').select2({
      dropdownParent: $('#quienes_div'),
      language: "es"
    });
    $('#expectativas,#quienes').change(function() {
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
    if (valor == 227) {
      document.getElementById('inicio').hidden=false;
      document.getElementById('cantidad').hidden=false;
      document.getElementById('prm_contexto_ini_id').hidden=false;
      document.getElementById('prm_consume_id').hidden=false;
      document.getElementById('prm_contexto_man_id').hidden=false;
      document.getElementById('prm_problema_id').hidden=false;
      document.getElementById('porque').hidden=false;
      document.getElementById('prm_motivo_id').hidden=false;
      document.getElementById('expectativas_div').hidden=false;
    } else {
      document.getElementById('inicio').hidden=true;
      document.getElementById('inicio').value=null;
      document.getElementById('cantidad').hidden=true;
      document.getElementById('cantidad').value=null;
      document.getElementById('prm_contexto_ini_id').hidden=true;
      document.getElementById('prm_contexto_ini_id').value=null;
      document.getElementById('prm_consume_id').hidden=true;
      document.getElementById('prm_consume_id').value=null;
      document.getElementById('prm_contexto_man_id').hidden=true;
      document.getElementById('prm_contexto_man_id').value=null;
      document.getElementById('prm_problema_id').hidden=true;
      document.getElementById('prm_problema_id').value=null;
      document.getElementById('porque').hidden=true;
      document.getElementById('porque').value=null;
      document.getElementById('prm_motivo_id').hidden=true;
      document.getElementById('prm_motivo_id').value=null;
      document.getElementById('expectativas_div').hidden=true;
      document.getElementById('expectativas').value=[];
    }
  }

  function doc1(valor) {
    if (valor == 227) {
      document.getElementById('quienes_div').hidden=false;
    } else {
      document.getElementById('quienes_div').hidden=true;
      document.getElementById('quienes').value=[];
    }
  }
  function doc2(valor) {
    if (valor == 227) {
      document.getElementById('prm_contexto_man_id').hidden=false;
      document.getElementById('prm_problema_id').hidden=false;
      document.getElementById('porque').hidden=false;
      document.getElementById('prm_motivo_id').hidden=false;
      document.getElementById('expectativas_div').hidden=false;
    } else {
      document.getElementById('prm_contexto_man_id').hidden=true;
      document.getElementById('prm_contexto_man_id').value='';
      document.getElementById('prm_problema_id').hidden=true;
      document.getElementById('prm_problema_id').value='';
      document.getElementById('porque').hidden=true;
      document.getElementById('porque').value='';
      document.getElementById('prm_motivo_id').hidden=true;
      document.getElementById('prm_motivo_id').value='';
      document.getElementById('expectativas_div').hidden=true;
      document.getElementById('expectativas').value=[];
    }
  }

  function carga() {
    doc(document.getElementById('prm_consumo_id').value)
    doc1(document.getElementById('prm_familia_id').value)
    doc2(document.getElementById('prm_consume_id').value)
  }

  window.onload = carga;

  init_contadorTa("descripcion", "contadorindescripcion", 4000);


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
