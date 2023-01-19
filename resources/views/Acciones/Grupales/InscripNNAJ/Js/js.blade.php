<script>
        (function($) {
            $.fn.extend( {
                limiter: function(limit, elem) {
                    $(this).on("keyup focus", function() {
                        setCount(this, elem);
                    });
                    function setCount(src, elem) {
                        var chars = src.value.length;
                        if (chars > limit) {
                            src.value = src.value.substr(0, limit);
                            chars = limit;
                        }
                        elem.html( chars+"/1000" );
                    }
                    setCount($(this)[0], elem);
                }
            });
        })(jQuery);
        var elem = $("#chars");
        $("#observaciones").limiter(1000, elem);

        



function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }

 function doc(valor){
    if(valor == 3028){
            document.getElementById("modal_div").hidden=false;

            
            
    }else{
        document.getElementById("modal_div").hidden=true;

        
        } 
  
    } 
    function doc1(valor){
        if(valor == 2 ){
            document.getElementById("novedad_div").hidden=false;
            
            
        }else{
        document.getElementById("novedad_div").hidden=true;
         }
      
        
        } 
  
        function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    } 


    function carga() {
        doc(document.getElementById('etapa_id').value);
        doc1(document.getElementById('sis_esta_id').value);
        
    }
    window.onload=carga;

  
</script>

