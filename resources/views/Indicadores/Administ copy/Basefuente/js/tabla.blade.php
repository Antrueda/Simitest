<script>
$(function(){
    $('#tablaprincipal tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('btn-success') ) {
            $(this).removeClass('btn-success');
        }
        else { 
            var d = tablaprincipal.row( this ).data().id;
            tablaprincipal.$('tr.btn-success').removeClass('odd btn-success');
            $(this).addClass('btn-success');
        }
    } );
});
</script>