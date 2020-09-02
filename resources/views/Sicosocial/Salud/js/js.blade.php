<script>
$(document).ready(function(){
    $('#causas').select2({
        dropdownParent: $('#causas_div'),
        language: "es"
    });
    $('#fortalezas').select2({
        dropdownParent: $('#fortalezas_div'),
        language: "es"
    });
    $('#dificultades').select2({
        dropdownParent: $('#dificultades_div'),
        language: "es"
    });
    $('#dificultadesa').select2({
        dropdownParent: $('#dificultadesa_div'),
        language: "es"
    });
    $('#dificultadesb').select2({
        dropdownParent: $('#dificultadesb_div'),
        language: "es"
    });
});
function doc(valor){
    if(valor == 228){
        document.getElementById("prm_condicion_id").hidden=true;
    } else {
        document.getElementById("prm_condicion_id").hidden=false;
    }
}
function doc1(valor){
    if(valor == 228){
        document.getElementById("medicamento").hidden=true;
    } else {
        document.getElementById("medicamento").hidden=false; 

    }
}
function doc2(valor) {
    if (valor == 1022) {
        document.getElementById("causas_div").hidden=false;
    } else {
        document.getElementById("causas_div").hidden=true;
        document.getElementById("causas").value=[];
    }
}
function carga() {
    doc(document.getElementById('prm_atencion_id').value);
    doc1(document.getElementById('prm_medicamento_id').value);
    doc2(document.getElementById('prm_motivo_id').value);

}
window.onload=carga;
</script>
