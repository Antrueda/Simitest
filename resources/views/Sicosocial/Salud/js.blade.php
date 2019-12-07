<script>
function doc(valor){
    if(valor == 228){
        document.getElementById("prm_condicion_id").hidden=true;
        document.getElementById("prm_condicion_id").value='';
    } else {
        document.getElementById("prm_condicion_id").hidden=false;
    }
}
function doc1(valor){
    if(valor == 228){
        document.getElementById("medicamento").hidden=true;
        document.getElementById("medicamento").value='';
        document.getElementById("prm_prescripcion_id").hidden=true;
        document.getElementById("prm_prescripcion_id").value='';
        document.getElementById("descripcion").hidden=true;
        document.getElementById("descripcion").value='';
    } else {
        document.getElementById("medicamento").hidden=false;
        document.getElementById("prm_prescripcion_id").hidden=false;
        document.getElementById("descripcion").hidden=false;
    }
}
function doc2(valor){
    if(valor == 228){
        document.getElementById("edad").hidden=true;
        document.getElementById("edad").value='';
        document.getElementById("prm_activa_id").hidden=true;
        document.getElementById("prm_activa_id").value='';
        document.getElementById("prm_embarazo_id").hidden=true;
        document.getElementById("prm_hijo_id").hidden=true;
        document.getElementById("prm_interrupcion_id").hidden=true;
        doc3(document.getElementById('prm_embarazo_id').value = 228);
        doc4(document.getElementById('prm_hijo_id').value = 228);
        doc5(document.getElementById('prm_interrupcion_id').value = 228);
    } else {
        document.getElementById("edad").hidden=false;
        document.getElementById("prm_activa_id").hidden=false;
        document.getElementById("prm_embarazo_id").hidden=false;
        document.getElementById("prm_hijo_id").hidden=false;
        document.getElementById("prm_interrupcion_id").hidden=false;
    }
}
function doc3(valor){
    if(valor == 228){
        document.getElementById("embarazo").hidden=true;
        document.getElementById("embarazo").value='';
    } else {
        document.getElementById("embarazo").hidden=false;
    }
}
function doc4(valor){
    if(valor == 228){
        document.getElementById("hijo").hidden=true;
        document.getElementById("hijo").value='';
    } else {
        document.getElementById("hijo").hidden=false;
    }
}
function doc5(valor){
    if(valor == 228){
        document.getElementById("interrupcion").hidden=true;
        document.getElementById("interrupcion").value='';
    } else {
        document.getElementById("interrupcion").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('prm_atencion_id').value);
    doc1(document.getElementById('prm_medicamento_id').value);
    doc2(document.getElementById('prm_sexual_id').value);
    doc3(document.getElementById('prm_embarazo_id').value);
    doc4(document.getElementById('prm_hijo_id').value);
    doc5(document.getElementById('prm_interrupcion_id').value);
}
window.onload=carga;
</script>