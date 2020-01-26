<script>
$(document).ready(function () { 
    var f_tooltip=function(dataxxxx){  
        var propieda=dataxxxx.thisxxxx.attr('propiedad');
        var elemento=$("#"+propieda+' option:selected').val();
        $.ajax({
            url :  "{{url('api/tooltip/tooltip')}}",
            data : { idxxxxxx : elemento,casosxxx: propieda},
            type : 'GET',
            dataType : 'json',
            success : function(json) {
                dataxxxx.thisxxxx.attr('data-original-title',json.tooltipx) ;
                dataxxxx.thisxxxx.tooltip();
            },
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            },
        });
        
        
       
    }

    $(".mouseover").hover(function () {
        f_tooltip({'thisxxxx':$(this)});
    });
  
});
</script>