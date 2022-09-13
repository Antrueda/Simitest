<script>
  $(document).ready(function(){
    $('#medic_id').select2({
      language: "es"
    });



  });

    function doc(valor){
        if(valor == 227){
            document.getElementById("cual_div").hidden=false;
            }
        if(valor == 228){
            document.getElementById("cual_div").hidden=true;
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
    }
    window.onload=carga;
</script>
