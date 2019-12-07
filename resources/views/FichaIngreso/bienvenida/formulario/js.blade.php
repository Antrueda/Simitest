<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

    // CONTADOR DE CARACTERES
    init_contadorTa("s_porque_quiere_entrar","contadorporquequiere", 4000);
    init_contadorTa("s_que_gustaria_hacer","contadorgustariahacer", 4000);

    function init_contadorTa(idtextarea, idcontador,max)
    {
        $("#"+idtextarea).keyup(function()
                {
                    updateContadorTa(idtextarea, idcontador,max);
                });
        
        $("#"+idtextarea).change(function()
        {
                updateContadorTa(idtextarea, idcontador,max);
        });
        
    }

    function updateContadorTa(idtextarea, idcontador,max)
    {
        var contador = $("#"+idcontador);
        var ta =     $("#"+idtextarea);
        contador.html("0/"+max);
        
        contador.html(ta.val().length+"/"+max);
        if(parseInt(ta.val().length)>max)
        {
            ta.val(ta.val().substring(0,max-1));
            contador.html(max+"/"+max);
        }

    }

</script>