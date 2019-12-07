<script>
  $(document).ready(function(){
    $('#prm_upi_id').select2({
      language: "es"
    });
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
      document.getElementById("institución").hidden=true;
      document.getElementById("institución").value='';
      document.getElementById("nombre_recibe").hidden=true;
      document.getElementById("nombre_recibe").value='';
      document.getElementById("cargo_recibe").hidden=true;
      document.getElementById("cargo_recibe").value='';
      document.getElementById("placa_recibe").hidden=true;
      document.getElementById("placa_recibe").value='';
      document.getElementById("fecha_denuncia").hidden=true;
      document.getElementById("fecha_denuncia").value='';
      document.getElementById("hora_denuncia").hidden=true;
      document.getElementById("hora_denuncia").value='';
      document.getElementById("prm_hor_denuncia_id").hidden=true;
      document.getElementById("prm_hor_denuncia_id").value='';
    } else {
      document.getElementById("prm_llamada_id").hidden=false;
      document.getElementById("radicado").hidden=false;
      document.getElementById("recibe_denuncia").hidden=false;
      document.getElementById("institución").hidden=false;
      document.getElementById("nombre_recibe").hidden=false;
      document.getElementById("cargo_recibe").hidden=false;
      document.getElementById("placa_recibe").hidden=false;
      document.getElementById("fecha_denuncia").hidden=false;
      document.getElementById("hora_denuncia").hidden=false;
      document.getElementById("prm_hor_denuncia_id").hidden=false;
    }
  }

  function carga(){
    doc(document.getElementById('prm_tinturado_id').value);
    doc1(document.getElementById('prm_tipCabello_id').value);
    doc2(document.getElementById('prm_tienelunar_id').value);
    doc3(document.getElementById('prm_reporta_id').value);
  }
  window.onload = carga;
</script>