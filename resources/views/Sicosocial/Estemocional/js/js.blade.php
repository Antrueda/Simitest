<script>
$(document).ready(function() {
    $('#adecuados').select2({
        language: "es"
    });
    $('#dificultades').select2({
        language: "es"
    });
    $('#estresantes').select2({
        dropdownParent: $('#estresantes_div'),
        language: "es"
    });
    $('#motivos').select2({
        dropdownParent: $('#motivos_div'),
        language: "es"
    });
    $('#contexto').select2({
        language: "es"
    });
    $('#lesivas').select2({
        dropdownParent: $('#lesivas_div'),
        language: "es"
    });
    $('#adecuados,#dificultades').change(function() {
        f_comboSimple({
            dataxxxx: {
                padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                selectxx: $(this).prop('id'),
            },
            urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
            msnxxxxx:"Disculpe, existió un problema al armar el combo"
        });
    });
});

function doc(valor){
    if(valor == 227){
        document.getElementById("estresantes_div").hidden=false;
    } else {
        document.getElementById("estresantes_div").hidden=true;
    }
}
function doc1(valor){
    if(valor == 227){
        document.getElementById("dia_morir").hidden=false;
        document.getElementById("mes_morir").hidden=false;
        document.getElementById("ano_morir").hidden=false;
       } else {
        document.getElementById("dia_morir").hidden=true;
        document.getElementById("mes_morir").hidden=true;
        document.getElementById("ano_morir").hidden=true;

    }
}
function doc2(valor){
    if(valor == 227){
        document.getElementById("lesivas_div").hidden=false;
    } else {
        document.getElementById("lesivas_div").hidden=true;
        document.getElementById("lesivas").value=null;
    }
}
function doc3(valor) {
    if (valor == 227) {
        document.getElementById("ideacion").hidden=false;
        document.getElementById("prm_amenaza_id").value=[];
        document.getElementById("prm_intento_id").value=[];
    } else {
        document.getElementById("ideacion").hidden=true;
        document.getElementById("ideacion").value=null;
        document.getElementById("prm_amenaza_id").value=228;
        document.getElementById("prm_intento_id").value=228;
    }
}
function doc4(valor) {
    if (valor == 227) {
        document.getElementById("amenaza").hidden=false;
    } else {
        document.getElementById("amenaza").hidden=true;
        document.getElementById("amenaza").value=null;
    }
}
function doc5(valor) {
    if (valor == 227) {
        document.getElementById("intento").hidden=false;
        document.getElementById("dia_ultimo").hidden=false;
        document.getElementById("mes_ultimo").hidden=false;
        document.getElementById("ano_ultimo").hidden=false;
    } else {
        document.getElementById("intento").hidden=true;
        document.getElementById("intento").value = null;
        document.getElementById("dia_ultimo").hidden=true;
        document.getElementById("dia_ultimo").value = null;
        document.getElementById("mes_ultimo").hidden=true;
        document.getElementById("mes_ultimo").value = null;
        document.getElementById("ano_ultimo").hidden=true;
        document.getElementById("ano_ultimo").value = null;
    }
}
function doc6(valor) {
    if (valor == 227) {
        document.getElementById("dia_sueno").hidden=false;
        document.getElementById("mes_sueno").hidden=false;
        document.getElementById("ano_sueno").hidden=false;
    } else {
        document.getElementById("dia_sueno").hidden=true;
        document.getElementById("dia_sueno").value = null;
        document.getElementById("mes_sueno").hidden=true;
        document.getElementById("mes_sueno").value = null;
        document.getElementById("ano_sueno").hidden=true;
        document.getElementById("ano_sueno").value = null;
    }
}
function doc7(valor) {
    if (valor == 227) {
        document.getElementById("dia_alimenticio").hidden=false;
        document.getElementById("mes_alimenticio").hidden=false;
        document.getElementById("ano_alimenticio").hidden=false;
    } else {
        document.getElementById("dia_alimenticio").hidden=true;
        document.getElementById("dia_alimenticio").value = null;
        document.getElementById("mes_alimenticio").hidden=true;
        document.getElementById("mes_alimenticio").value = null;
        document.getElementById("ano_alimenticio").hidden=true;
        document.getElementById("ano_alimenticio").value = null;
    }
}
function carga() {
    doc(document.getElementById('prm_estresante_id').value);
    doc1(document.getElementById('prm_morir_id').value);
    doc2(document.getElementById('prm_lesiva_id').value);
    doc3(document.getElementById('prm_pensamiento_id').value);
    doc4(document.getElementById('prm_amenaza_id').value);
    doc5(document.getElementById('prm_intento_id').value);
    doc6(document.getElementById('prm_sueno_id').value);
    doc7(document.getElementById('prm_alimenticio_id').value);
}
window.onload=carga;
</script>
