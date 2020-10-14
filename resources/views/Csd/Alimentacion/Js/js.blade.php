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
</script>