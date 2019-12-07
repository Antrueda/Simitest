<script>
$(document).ready(function() {
    $('#motivos').select2({
        dropdownParent: $('#motivos_div'),
        language: "es"
    });
    $('#accesos').select2({
        dropdownParent: $('#accesos_div'),
        language: "es"
    });
    $('#servicios').select2({
        language: "es"
    });
    $('#servicios1').select2({
        language: "es"
    });
});
function doc(valor){
    if(valor == 228){
        document.getElementById("motivos_div").hidden=true;
        document.getElementById("motivos").value=[];
        document.getElementById("prm_quien_id").hidden=true;
    } else {
        document.getElementById("motivos_div").hidden=false;
        document.getElementById("prm_quien_id").hidden=false;
    }
}
function doc1(valor){
    if(valor == 228){
        document.getElementById("accesos_div").hidden=true;
    } else {
        document.getElementById("accesos_div").hidden=false;
    }
}
function doc2(valor){
    if(valor == 228){
        document.getElementById("prm_protector_id").hidden=true;
    } else {
        document.getElementById("prm_protector_id").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('prm_dificultad_id').value);
    doc1(document.getElementById('prm_acceso_id').value);
    doc2(document.getElementById('prm_presenta_id').value);
}
window.onload=carga;
</script>