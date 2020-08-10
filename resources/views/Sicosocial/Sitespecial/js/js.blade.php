<script>
  $(document).ready(function(){
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
      document.getElementById("prm_victima_id").value = [];
    }
  }

  function doc1(valor) {
    if (valor == 853) {
      document.getElementById("prm_victima_id").hidden=true;
      document.getElementById("prm_victima_id").value = [];
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
