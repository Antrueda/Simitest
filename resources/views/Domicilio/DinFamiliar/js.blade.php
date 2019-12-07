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
    $('#prm_jefe1_id').select2({
      language: "es"
    });
    $('#prm_jefe2_id').select2({
      language: "es"
    });
    $('#prm_cuidador_id').select2({
      language: "es"
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
    } else {
      document.getElementById("prm_conoce_id").hidden=true;
      document.getElementById("normas_div").hidden=true;
      document.getElementById("establecen_div").hidden=true;
      document.getElementById("prm_actuan_id").hidden=true;
      document.getElementById("porque").hidden=true;
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

  window.onload = carga;

</script>