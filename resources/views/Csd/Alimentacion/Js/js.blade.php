<script>
  $(document).ready(function() {
    $('#frecuencia').select2({
      language: "es"
    });
    $('#compra').select2({
      language: "es"
    });
    $('#ingeridas').select2({
      language: "es"
    });
    $('#prepara').select2({
      language: "es"
    });

    $('#prepara,#ingeridas').change(function() {
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
      document.getElementById("prm_entidad_id").hidden=false;
    } else{
      document.getElementById("prm_entidad_id").hidden=true;
    }
  }
  
  function carga() {
    doc(document.getElementById('prm_apoyo_id').value);
  }

  window.onload = carga;
  function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>