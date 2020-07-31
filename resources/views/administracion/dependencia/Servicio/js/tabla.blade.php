<script>
     toastr.options = {
            "positionClass": "toast-top-full-width",
        }
        toastr.options.closeHtml = '<button><i class="icon-off"></i></button>';
    $(function(){
        $('#{{$todoxxxx["tablaxxx"]}}').on('click','.dttservicios',function(){
            var dataxxxx={
                confirmx:'Desea inactivar el servicio: '+$(this).prop('id')+'?',
                reconfir:'Realmente desea inactivar el servicio: '+$(this).prop('id')+'?',
                datatabl:{{$todoxxxx["tablaxxx"]}},
                urlxxxxx:"{{route('servdepe.borrar')}}",
                dataxxxx:{servicio:$(this).prop('id')},
                typexxxx:'GET',
                msnxxxxx:'No se puedo inactivar el servicio'}
                f_confirm(dataxxxx);
       })
    });
</script>
