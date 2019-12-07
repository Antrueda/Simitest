<script>
$(document).ready(function() {
    $('#cuidador').select2({
        language: "es"
    });
    $('#ausencia').select2({
        dropdownParent: $('#ausencia_div'),
        language: "es"
    });
    $('#calles').select2({
        language: "es"
    });
    $('#delitos').select2({
        language: "es"
    });
    $('#prostituciones').select2({
        language: "es"
    });
    $('#libertades').select2({
        language: "es"
    });
    $('#consumo').select2({
        language: "es"
    });
    $('#salud').select2({
        language: "es"
    });
});
function doc(valor) {
    if(valor == 235) {
        document.getElementById("ausencia_div").hidden=true;
        document.getElementById("ausencia").value = [];
    } else {
        document.getElementById("ausencia_div").hidden=false;
    }
}
function doc1(valor) {
    if(valor != '') {
        document.getElementById("prm_hogar_id").hidden=true;
        document.getElementById("prm_hogar_id").value = '';
    } else {
        document.getElementById("prm_hogar_id").hidden=false;
    }
}
function doc2(valor) {
    if(valor != '') {
        document.getElementById("prm_familiar_id").hidden=true;
        document.getElementById("prm_familiar_id").value = '';
    } else {
        document.getElementById("prm_familiar_id").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('cuidador').value)
    doc1(document.getElementById('prm_familiar_id').value)
    doc2(document.getElementById('prm_hogar_id').value)
}
window.onload = carga;
</script>