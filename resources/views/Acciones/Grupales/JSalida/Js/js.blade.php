<script>
   $(function(){
    $(document).ready(function(){
      $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });
});
});
init_contadorTa("observacion", "contadorobservacion", 4000);

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

function doc(valor){
    if(valor == 227){
        document.getElementById("fecharetorno").hidden=false;
        document.getElementById("horaretorno").hidden=false;
    } else {
        document.getElementById("fecharetorno").hidden=true;
        document.getElementById("horaretorno").hidden=true;
    }
}

function carga() {
	doc(document.getElementById('retorna_id').value);

}
window.onload=carga;
  
</script>

