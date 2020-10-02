<script>
$(document).ready(function() {
    $('#facilitas').select2({
      language: "es"
    });
    $('#dificultadex').select2({
      language: "es"
    });

    $('#dificultadex').change(function() {
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
        document.getElementById("completa").hidden=true;
        document.getElementById("completa").value = '';
    } else {
        document.getElementById("prm_dificultad_id").hidden=false;
        document.getElementById("completa").hidden=false;
    }
}
function carga() {
    doc(document.getElementById('dificultades').value)
}
window.onload = carga;
</script>
