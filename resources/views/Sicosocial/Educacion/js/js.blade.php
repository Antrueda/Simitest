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
        document.getElementById("dia").hidden=false;
        document.getElementById("mes").hidden=false;
        document.getElementById("ano").hidden=false;
        document.getElementById("prm_motivo_id").hidden=false;
        document.getElementById("prm_rendimiento_id").hidden=false;
        document.getElementById("fortalezas_div").hidden=false;
        document.getElementById("fortalezas").value=[];
        document.getElementById("dificultades_div").hidden=false;
        document.getElementById("dificultades").value=[];
        document.getElementById("prm_dificultad_id").hidden=true;
        doc1(document.getElementById('prm_dificultad_id').value = 228);
    } else {
        document.getElementById("dia").hidden=true;
        document.getElementById("dia").value='';
        document.getElementById("mes").hidden=true;
        document.getElementById("mes").value='';
        document.getElementById("ano").hidden=true;
        document.getElementById("ano").value='';
        document.getElementById("prm_motivo_id").hidden=true;
        document.getElementById("prm_rendimiento_id").hidden=false;
        document.getElementById("fortalezas_div").hidden=false;
        document.getElementById("dificultades_div").hidden=false;
        document.getElementById("prm_dificultad_id").hidden=false;
        doc2(document.getElementById("prm_motivo_id").value = 1021);
    }
}
function doc1(valor){
    if(valor == 228){
        document.getElementById("dificultadesa_div").hidden=true;
        document.getElementById("dificultadesa").value=[];
        document.getElementById("dificultadesb_div").hidden=true;
        document.getElementById("dificultadesb").value=[];
    } else {
        document.getElementById("dificultadesa_div").hidden=false;
        document.getElementById("dificultadesb_div").hidden=false;
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
    doc(document.getElementById('prm_estudia_id').value);
    doc1(document.getElementById('prm_dificultad_id').value);
    doc2(document.getElementById('prm_motivo_id').value);

}
window.onload=carga;
</script>
