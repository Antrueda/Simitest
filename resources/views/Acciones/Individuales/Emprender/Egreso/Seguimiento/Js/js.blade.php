<script>
  $(document).ready(function(){
    $('.select2').select2({
      language: "es"
    });


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
                        elem.html( chars+"/4000" );
                    }
                    setCount($(this)[0], elem);
                }
            });
        })(jQuery);
        var elem = $("#consul");
        $("#observconsu").limiter(4000, elem);
        var elem = $("#telef");
        $("#obserllamad").limiter(4000, elem);
        var elem = $("#verifi");
        $("#observerifi").limiter(4000, elem);
        var elem = $("#empre");
        $("#observemp").limiter(4000, elem);

  });

  function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
    function doc(valor){
        if(valor == 227){
            document.getElementById("cual_div").hidden=false;
            }
        if(valor == 228){
            document.getElementById("cual_div").hidden=true;
        }
    } 

    function doc2(valor){
        if(valor == 227){
            document.getElementById("diag_div").hidden=false;
            }
        if(valor == 228){
            document.getElementById("diag_div").hidden=true;
        }
    } 

    function doc1(valor){
        if(valor == 227){
            document.getElementById("medic_div").hidden=false;
        }
        if(valor == 228){
            document.getElementById("medic_div").hidden=true;
        }
    } 


    function carga() {
        doc(document.getElementById('alergia_id').value);
        doc1(document.getElementById('toma_id').value);
        doc2(document.getElementById('enfactu_id').value);
    }
    window.onload=carga;

</script>
