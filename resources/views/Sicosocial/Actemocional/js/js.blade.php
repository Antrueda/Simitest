<script>
$(document).ready(function() {
    $('#fisiologicas').select2({
        language: "es"
    });
})
function doc(valor){
    if(valor == 228){
        document.getElementById("fisiologicas_div").hidden=true;
        document.getElementById("fisiologicas_div").value=[];
        document.getElementById("descripcion").hidden=true;
        document.getElementById("descripcion").value=[];
        document.getElementById("conductual").hidden=true;
        document.getElementById("conductual").value=[];
        document.getElementById("cognitiva").hidden=true;
        document.getElementById("cognitiva").value=[];
    } else {
        document.getElementById("fisiologicas_div").hidden=false;
        document.getElementById("fisiologicas").hidden=false;
        document.getElementById("descripcion").hidden=false;
        document.getElementById("conductual").hidden=false;
        document.getElementById("cognitiva").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('prm_activa_id').value);
}
window.onload=carga;
</script>
