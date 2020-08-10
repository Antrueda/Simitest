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
</script>
