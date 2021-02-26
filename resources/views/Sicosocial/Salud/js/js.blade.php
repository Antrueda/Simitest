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
        document.getElementById("prm_prescripcion_id").hidden=true;
    } else {
        document.getElementById("medicamento").hidden=false; 
        document.getElementById("prm_prescripcion_id").hidden=false;

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


function doc3(valor) {
    if (valor == 227) {
        
        document.getElementById("edad").hidden=false;
        document.getElementById("prm_activa_id").hidden=false;
        document.getElementById("prm_embarazo_id").hidden=false;
        document.getElementById("embarazo").hidden=false;
        document.getElementById("prm_hijo_id").hidden=false;
        document.getElementById("hijo").hidden=false;
        document.getElementById("prm_interrupcion_id").hidden=false;
        document.getElementById("interrupcion").hidden=false;
    } else {
        
        document.getElementById("edad").hidden=true;
        document.getElementById("prm_activa_id").hidden=true;
        document.getElementById("prm_embarazo_id").hidden=true;
        document.getElementById("embarazo").hidden=true;
        document.getElementById("prm_hijo_id").hidden=true;
        document.getElementById("hijo").hidden=true;
        document.getElementById("prm_interrupcion_id").hidden=true;
        document.getElementById("interrupcion").hidden=true;
    }
}

function doc4(valor) {
    if (valor == 227) {
        document.getElementById("embarazo").hidden=false;
    } else {
        document.getElementById("embarazo").hidden=true;
    }
}


function doc5(valor) {
    if (valor == 227) {
        document.getElementById("hijo").hidden=false;
    } else {
        document.getElementById("hijo").hidden=true;
    }
}

function doc6(valor) {
    if (valor == 227) {
        document.getElementById("interrupcion").hidden=false;
    } else {
        document.getElementById("interrupcion").hidden=true;
    }
}
function carga() {
    doc(document.getElementById('prm_atencion_id').value);
    doc1(document.getElementById('prm_medicamento_id').value);
    doc2(document.getElementById('prm_motivo_id').value);

}
window.onload=carga;

init_contadorTa("descripcion", "contadordescripcion", 4000);

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

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>
