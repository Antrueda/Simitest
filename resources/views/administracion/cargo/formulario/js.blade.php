<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
   $(function(){

    $("#dtiegabe").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: '-28y +0m +0d',
            maxDate: '+0y +0m +0d',
            yearRange: "-28:+0",
            onSelect: function(dateText) {
                $.ajax({
                    url: "{{ route('usuario.tiempocarga') }}",
                    data: {
                        fechaxxx: dateText
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $("#itiegabe").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });
    $("#dtiestan").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: '-28y +0m +0d',
            maxDate: '+0y +0m +0d',
            yearRange: "-28:+0",
            onSelect: function(dateText) {
                $.ajax({
                    url: "{{ route('usuario.tiempocarga') }}",
                    data: {
                        fechaxxx: dateText
                    },
                    type: 'GET',
                    dataType: 'json',
                    success: function(json) {
                        $("#itiestan").val(json.tiemcarg);
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
        });



   });
</script>
