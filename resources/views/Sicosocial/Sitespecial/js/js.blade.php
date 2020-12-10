<script>
  $(document).ready(function(){
    $('#victimas,#riesgos').change(function() {
        f_comboSimple({
            dataxxxx: {
                padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                selectxx: $(this).prop('id'),
            },
            urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
            msnxxxxx:"Disculpe, existió un problema al armar el combo"
        });
    });
    $('#victimas').select2({
      language: "es"
    });
    $('#riesgos').select2({
      dropdownParent: $('#riesgos_div'),
      language: "es"
    });

  
  });
  function doc(valor) {
    if (valor != 853) {
      document.getElementById("riesgos_div").hidden=true;
      document.getElementById("riesgos").value = [];
      document.getElementById("prm_victima_id").hidden=false;
    } else {
      document.getElementById("riesgos_div").hidden=false;
      document.getElementById("prm_victima_id").hidden=true;
      }
  }

  function doc1(valor) {
    if (valor != 853) {
      document.getElementById("prm_victima_id").hidden=true;
      
    } else {
      document.getElementById("prm_victima_id").hidden=false;
    }
  }

  function carga() {
    doc(document.getElementById('victimas').value);
    doc1(document.getElementById('riesgos').value);
  }
  window.onload = carga;
</script>
