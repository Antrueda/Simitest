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

init_contadorTa("descripcion", "contadorindescripcion", 4000);
init_contadorTa("conductual", "contadorconductual", 4000);
init_contadorTa("cognitiva", "contadorcognitiva", 4000);


    function init_contadorTa(idtextarea, idcontador, max) {
    $("#" + idtextarea).keyup(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
    $("#" + idtextarea).change(function() {
        updateContadorTa(idtextarea, idcontador, max);
    });
}

function updateContadorTa(idtextarea, idcontador, max) {
    var contador = $("#" + idcontador);
    var ta = $("#" + idtextarea);
    contador.html("0/" + max);
    contador.html(ta.val().length + "/" + max);
    if (parseInt(ta.val().length) > max) {
        ta.val(ta.val().substring(0, max - 1));
        contador.html(max + "/" + max);
    }

}
</script>
