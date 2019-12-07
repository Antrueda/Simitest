<script>
$(document).ready(function() {
    $('#facilitas').select2({
      language: "es"
    });
    $('#dificultades').select2({
      language: "es"
    });
});
function doc(valor) {
    if(valor == 689) {
        document.getElementById("prm_dificultad_id").hidden=true;
        document.getElementById("prm_dificultad_id").value = '';
        document.getElementById("completa").hidden=true;
        document.getElementById("completa").value = '';
    } else {
        document.getElementById("prm_dificultad_id").hidden=false;
        document.getElementById("completa").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('dificultades').value)
}
window.onload = carga;
</script>