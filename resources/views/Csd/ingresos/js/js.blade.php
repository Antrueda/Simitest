<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
  $(document).ready(function() {
    $('#dias').select2({
      language: "es"
    });
  });
    function doc(valor){
        if(valor == 626){
            document.getElementById("trabaja").hidden=false;
            document.getElementById("prm_informal_id").hidden=true;
            document.getElementById("prm_otra_id").hidden=true;
            document.getElementById("prm_laboral_id").hidden=false;
            document.getElementById("prm_frecuencia_id").hidden=false;
            document.getElementById("intensidad").hidden=false;
        } 
        if(valor == 627) {
            document.getElementById("trabaja").hidden=true;
            document.getElementById("prm_informal_id").hidden=false;
            document.getElementById("prm_otra_id").hidden=true;
            document.getElementById("prm_laboral_id").hidden=true;
            document.getElementById("prm_frecuencia_id").hidden=false;
            document.getElementById("intensidad").hidden=false;
        }
        if(valor == 628) {
            document.getElementById("trabaja").hidden=true;
            document.getElementById("prm_informal_id").hidden=true;
            document.getElementById("prm_otra_id").hidden=false;
            document.getElementById("prm_laboral_id").hidden=true;
            document.getElementById("prm_frecuencia_id").hidden=false;
            document.getElementById("intensidad").hidden=false;
        }
        if(valor == 853) {
            document.getElementById("trabaja").hidden=true;
            document.getElementById("prm_informal_id").hidden=true;
            document.getElementById("prm_otra_id").hidden=true;
            document.getElementById("prm_laboral_id").hidden=true;
            document.getElementById("prm_frecuencia_id").hidden=true;
            document.getElementById("intensidad").hidden=true;
        }
    }
    function carga() {
        doc(document.getElementById('prm_actividad_id').value);
    }
    window.onload=carga;
    </script>
