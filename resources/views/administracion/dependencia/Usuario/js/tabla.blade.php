<script>
     toastr.options = {
            "positionClass": "toast-top-full-width",
        }

    $(function(){
        $('#{{$todoxxxx["tablaxxx"]}}').on('click','.dttservicios',function(){
            var dataxxxx={
                confirmx:'Desea inactivar el usuario: '+$(this).prop('id')+'?',
                reconfir:'Realmente desea inactivar el usuario: '+$(this).prop('id')+'?',
                datatabl:{{$todoxxxx["tablaxxx"]}},
                urlxxxxx:"{{route($todoxxxx['routxxxx'].'.borrar')}}",
                dataxxxx:{padrexxx:$(this).prop('id')},
                typexxxx:'GET',
                msnxxxxx:'No se puedo inactivar el usuario'}
                f_confirm(dataxxxx);
       })
    });
</script>
