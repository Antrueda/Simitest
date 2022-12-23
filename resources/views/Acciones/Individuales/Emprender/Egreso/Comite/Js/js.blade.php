<script>
  $(document).ready(function(){
    $('.select2').select2({
      language: "es"
    });
    




});
$(document).on('click','#remove',function(){
            $(this).closest('tr').remove();
        });

</script>
