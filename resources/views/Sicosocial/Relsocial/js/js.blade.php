<script>
$(document).ready(function() {
    $('#facilitas').select2({
      language: "es"
    });
    $('#dificultadex').select2({
      language: "es"
    });
    $('#dificultadez').select2({
      language: "es"
    });

    $('#dificultadex,#dificultadez').change(function() {
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
function doc(valor) {
    if(valor == 689) {
        document.getElementById("prm_dificultad_id").hidden=true;
        document.getElementById("prm_dificultad_id").value = '';
        // document.getElementById("completa").hidden=true;
        // document.getElementById("completa").value = '';
    } else {
        document.getElementById("prm_dificultad_id").hidden=false;
        // document.getElementById("completa").hidden=false;
    }
}
// function carga() {
//     doc(document.getElementById('dificultades').value)
// }
// window.onload = carga;


init_contadorTa("descripcion", "contadordescripcion", 4000);
init_contadorTa("completa", "contadorcompleta", 4000);


  

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

