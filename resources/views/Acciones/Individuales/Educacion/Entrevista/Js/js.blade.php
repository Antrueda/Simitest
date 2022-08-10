<script>
  $(document).ready(function(){
    
    $('#areas').select2({
      language: "es"
    });

    $('#intra').select2({
      language: "es"
    });
    
    $('#user_id').select2({
      language: "es"
    });
    $('#prm_upi2_id').select2({
      language: "es"
    });
    $('#user_doc1_id').select2({
      language: "es"
    });



  });
init_contadorTa("anteclinicos","contadoranteclinicos", 4000);
init_contadorTa("observacion", "contadorobservacion", 4000);
init_contadorTa("observacio2", "contadorobservacio2", 4000);
init_contadorTa("anteocupaci", "contadoranteocupaci", 4000);
init_contadorTa("anteotiempo", "contadoranteotiempo", 4000);
init_contadorTa("prospeccion", "contadorprospeccion", 4000);
init_contadorTa("obsefamilia", "contadorobsefamilia", 4000);
init_contadorTa("osexualidad", "contadorosexualidad", 4000);
init_contadorTa("conceptoocu", "contadorconceptoocu", 4000);


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
        if(valor == 2726){
            document.getElementById("intertext").hidden=false;
            document.getElementById("area_id").hidden=true;
            
        } 
        if(valor == 2725){
            document.getElementById("intertext").hidden=true;
            document.getElementById("area_id").hidden=false;
            
        } 
    } 


    function carga() {
        doc(document.getElementById('prm_remite').value);
        
    }
    window.onload=carga;
</script>
