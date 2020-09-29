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
        document.getElementById("prm_rendimiento_id").value=[];
        document.getElementById("fortalezas_div").hidden=false;
        document.getElementById("fortalezas").value=[];
        document.getElementById("dificultades_div").hidden=false;
        document.getElementById("dificultades").value=[];
        document.getElementById("prm_dificultad_id").hidden=true;
        document.getElementById("prm_dificultad_id").value=[];
        document.getElementById("causas_div").hidden=false;
        
             
        
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
        document.getElementById("causas_div").hidden=true;
        document.getElementById("causas").value=[];
        
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

function carga() {
    doc(document.getElementById('prm_estudia_id').value);
    doc(document.getElementById('prm_rendimiento_id').value);
    
    
    

}
window.onload=carga;
</script>
