<script>
$(function(){
    $('#tablaindicadores tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('btn-success') ) {
            $(this).removeClass('btn-success');
        }
        else { 
            var d = tablaindicadores.row( this ).data().id;
            tablaindicadores.$('tr.btn-success').removeClass('odd btn-success');
            $(this).addClass('btn-success');
        }
    } );
});
</script>