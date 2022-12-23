<script>
  $(document).ready(function(){
    $('#.select2').select2({
      language: "es"
    });



      

  });

  function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
    function doc(valor){
        if(valor == 227 ){
            document.getElementById("difidiv").hidden=false;
            document.getElementById("whodiv").hidden=false;
            
        }else{
        document.getElementById("difidiv").hidden=true;
        document.getElementById("whodiv").hidden=true;
         }
      
        }  
    function doc1(valor){
        if(valor == 227 ){
            document.getElementById("motivodiv").hidden=false;
            
            
        }else{
        document.getElementById("motivodiv").hidden=true;
         }
      
        }  

        function carga() {
        doc(document.getElementById('dificulta_id').value);
        doc1(document.getElementById('restriespa_id').value);
     }
    window.onload=carga;

</script>
