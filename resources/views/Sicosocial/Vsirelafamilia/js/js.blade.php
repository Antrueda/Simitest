<script>
$(document).ready(function() {
    $('#motivos,#prm_representativa_id,#prm_mala_id').select2({
        language: "es"
    });
    $('#famDificultades').select2({
        dropdownParent: $('#famDificultades_div'),
        language: "es"
    });
    $('#acciones').select2({
        dropdownParent: $('#acciones_div'),
        language: "es"
    });
});
function doc(valor) {
    if(valor == 228){
        document.getElementById("famDificultades_div").hidden=true;
        document.getElementById("famDificultades").value=[];
        document.getElementById("acciones_div").hidden=true;
        document.getElementById("acciones").value=[];
        document.getElementById("prm_denuncia_id").hidden=true;
        document.getElementById("prm_denunante_id").hidden=true;
        
    } else {
        document.getElementById("famDificultades_div").hidden=false;
        document.getElementById("acciones_div").hidden=false;
        document.getElementById("prm_denuncia_id").hidden=false;
        document.getElementById("prm_denunante_id").hidden=false;
     
    }
}
function doc1(valor){
    if(valor == 228 || valor == 235){
        document.getElementById("prm_dificultad_id").hidden=true;
        doc2(document.getElementById("prm_dificultad_id").value=228);
    } else {
        document.getElementById("prm_dificultad_id").hidden=false;
    }
}
function doc2(valor){
    if(valor == 228 || valor==235){
        document.getElementById("dia").hidden=true;
        document.getElementById("dia").value='';
        document.getElementById("mes").hidden=true;
        document.getElementById("mes").value='';
        document.getElementById("ano").hidden=true;
        document.getElementById("ano").value='';
        document.getElementById("prm_responde_id").hidden=true;
        document.getElementById("prm_responde_id").value='';
        document.getElementById("descripcion1").hidden=true;
        document.getElementById("descripcion1").value='';
    } else {
        document.getElementById("dia").hidden=false;
        document.getElementById("mes").hidden=false;
        document.getElementById("ano").hidden=false;
        document.getElementById("prm_responde_id").hidden=false;
        document.getElementById("descripcion1").hidden=false;
    }
}

function doc3(valor){
    if(valor == 228 || valor == 235){
        document.getElementById("motivos_div").hidden=true;
        document.getElementById("motivos").value=[];
    } else {
        document.getElementById("motivos_div").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('prm_familia_id').value);
    doc1(document.getElementById('prm_pareja_id').value);
    doc2(document.getElementById('prm_dificultad_id').value);
}
window.onload=carga;
</script>
