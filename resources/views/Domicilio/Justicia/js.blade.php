<script>
function doc(valor){
	if(valor == 227){
		document.getElementById("prm_vin_causa_id").hidden=false;
	} else {
		document.getElementById("prm_vin_causa_id").hidden=true;
	}
}
function doc1(valor){
    if(valor == 227){
        document.getElementById("prm_rie_causa_id").hidden=false;
    } else {
        document.getElementById("prm_rie_causa_id").hidden=true;
    }
}
function carga() {
	doc(document.getElementById('prm_vinculado_id').value);
    doc1(document.getElementById('prm_riesgo_id').value);
}
window.onload=carga;
</script>