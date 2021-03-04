<script>
function doc(valor) {
    if (valor==228) {
        document.getElementById("dia").hidden=true;
        document.getElementById("dia").value = null;
        document.getElementById("mes").hidden=true;
        document.getElementById("mes").value = null;
        document.getElementById("ano").hidden=true;
        document.getElementById("ano").value = null;
        document.getElementById("prm_momento_id").hidden=true;
        document.getElementById("prm_persona_id").hidden=true;
        document.getElementById("prm_tipo_id").hidden=true;
        document.getElementById("prm_convive_id").hidden=true;
        document.getElementById("prm_convive_id").value=null;
        document.getElementById("prm_presencia_id").hidden=true;
        document.getElementById("prm_presencia_id").value=null;
        document.getElementById("prm_reconoce_id").hidden=true;
        document.getElementById("prm_reconoce_id").value=null;
        document.getElementById("prm_apoyo_id").hidden=true;
        document.getElementById("prm_apoyo_id").value=null;
        document.getElementById("prm_denuncia_id").hidden=true;
        document.getElementById("prm_denuncia_id").value=null;
        document.getElementById("prm_terapia_id").hidden=true;
        document.getElementById("prm_terapia_id").value=null;
        document.getElementById("informacion").hidden=true;
        document.getElementById("informacion").value=null;
        document.getElementById("prm_momento_ult_id").hidden=true;
        document.getElementById("prm_persona_ult_id").hidden=true;
        document.getElementById("prm_tipo_ult_id").hidden=true;
        document.getElementById("prm_estado_id").hidden=true;
        document.getElementById("prm_estado_id").value=null;
        document.getElementById("dia_ult").hidden=true;
        document.getElementById("dia_ult").value=null;
        document.getElementById("mes_ult").hidden=true;
        document.getElementById("mes_ult").value=null;
        document.getElementById("ano_ult").hidden=true;
        document.getElementById("ano_ult").value=null;
        document.getElementById("prm_momento_id").value=null;
        document.getElementById("prm_tipo_id").value=null;
        document.getElementById("prm_terapia_id").value=null;
        doc1(document.getElementById('prm_momento_id').value = 1013);
        doc2(document.getElementById('prm_tipo_id').value=338);
        doc3(document.getElementById('prm_terapia_id').value=228);
    }
    else{
        document.getElementById("dia").hidden=false;
        document.getElementById("mes").hidden=false;
        document.getElementById("ano").hidden=false;
        document.getElementById("prm_momento_id").hidden=false;
        document.getElementById("prm_persona_id").hidden=false;
        document.getElementById("prm_tipo_id").hidden=false;
    }
}
function doc1(valor) {
    if (valor == 1013) {
        document.getElementById("dia_ult").hidden=true;
        document.getElementById("dia_ult").value=null;
        document.getElementById("mes_ult").hidden=true;
        document.getElementById("mes_ult").value=null;
        document.getElementById("ano_ult").hidden=true;
        document.getElementById("ano_ult").value=null;
        document.getElementById("prm_momento_ult_id").hidden=true;
        document.getElementById("prm_persona_ult_id").hidden=true;
        document.getElementById("prm_tipo_ult_id").hidden=true;

    } else {
        document.getElementById("dia_ult").hidden=false;
        document.getElementById("mes_ult").hidden=false;
        document.getElementById("ano_ult").hidden=false;
        document.getElementById("prm_momento_ult_id").hidden=false;
        document.getElementById("prm_persona_ult_id").hidden=false;
        document.getElementById("prm_tipo_ult_id").hidden=false;
    }
}
function doc2(valor){
    if(valor == 338){
        document.getElementById("prm_convive_id").hidden=true;
        document.getElementById("prm_convive_id").value=null;
        document.getElementById("prm_presencia_id").hidden=true;
        document.getElementById("prm_presencia_id").value=null;
        document.getElementById("prm_reconoce_id").hidden=true;
        document.getElementById("prm_reconoce_id").value=null;
        document.getElementById("prm_apoyo_id").hidden=true;
        document.getElementById("prm_apoyo_id").value=null;
        document.getElementById("prm_denuncia_id").hidden=true;
        document.getElementById("prm_denuncia_id").value=null;
        document.getElementById("prm_terapia_id").hidden=true;
        document.getElementById("prm_terapia_id").value=null;
        document.getElementById("informacion").hidden=true;
        document.getElementById("informacion").value=null;
        doc3(document.getElementById('prm_terapia_id').value = 228);
    } else {
        document.getElementById("prm_convive_id").hidden=false;
        document.getElementById("prm_presencia_id").hidden=false;
        document.getElementById("prm_reconoce_id").hidden=false;
        document.getElementById("prm_apoyo_id").hidden=false;
        document.getElementById("prm_denuncia_id").hidden=false;
        document.getElementById("prm_terapia_id").hidden=false;
        document.getElementById("informacion").hidden=false;
    }
}
function doc3(valor) {
    if (valor == 228) {
        document.getElementById("prm_estado_id").hidden=true;
        document.getElementById("prm_estado_id").value=null;
    } else {
        document.getElementById("prm_estado_id").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('prm_evento_id').value);
    doc1(document.getElementById('prm_momento_id').value);
    doc2(document.getElementById('prm_tipo_id').value);
    doc3(document.getElementById('prm_terapia_id').value);
    
}
window.onload=carga;


init_contadorTa("informacion", "contadorinformacion", 4000);


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
