<script>
  $(document).ready(function(){
    $('#diag_id').select2({
      language: "es"
    });







  });
init_contadorTa("concepto", "contadorconcepto", 4000);



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


    function doc(valor){
        if(valor == 227){
            document.getElementById("remigen_id").hidden=false;
            document.getElementById("remisal_id").hidden=true;
        } 
        if(valor == 228){
            document.getElementById("remigen_id").hidden=false;
            document.getElementById("remisal_id").hidden=true;
        } 

        if(valor == 228){
            document.getElementById("remigen_id").hidden=false;
            document.getElementById("remisal_id").hidden=true;
        } 
    } 


    function doc2(valor){
        if(valor == 227){
            document.getElementById("recomenda").hidden=false;
            
        } 
        if(valor == 228){
            document.getElementById("recomenda").hidden=true;
            
        } 
    } 


    function carga() {
        doc(document.getElementById('remico_id').value);
        doc2(document.getElementById('certifi_id').value);


    }
    window.onload=carga;
</script>
