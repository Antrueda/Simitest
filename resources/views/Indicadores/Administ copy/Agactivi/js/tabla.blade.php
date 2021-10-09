<script>
$(function(){
    $('#tablaareas tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('btn-success') ) {
            $(this).removeClass('btn-success');
        }
        else { 
            var d = tablaareas.row( this ).data().id;
            tablaareas.$('tr.btn-success').removeClass('odd btn-success');
            $(this).addClass('btn-success');
        }
    } );
});
</script>