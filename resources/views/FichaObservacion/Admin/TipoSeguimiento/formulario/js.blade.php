<script>
   $(function(){
    $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4'
        });
        init_contadorTal("descripcion","contadordescripcion", 4000);

function init_contadorTal(idtextarea, idcontador, max){
    $("#"+idtextarea).keyup(function(){
        updateContadorTal(idtextarea, idcontador, max);
    });
    $("#"+idtextarea).change(function(){
        updateContadorTal(idtextarea, idcontador, max);
    });

}

function updateContadorTal(idtextarea, idcontador,max){
    var contador = $("#"+idcontador);
    var ta =     $("#"+idtextarea);
    contador.html("0/"+max);
    contador.html(ta.val().length+"/"+max);
    if(parseInt(ta.val().length)>max){
        ta.val(ta.val().substring(0,max-1));
        contador.html(max+"/"+max);
    }
}

    });
</script>
