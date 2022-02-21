<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){

        let pri_nombre = $('#pri_nombre');
        let seg_nombre = $('#seg_nombre');
        let pri_apellido = $('#pri_apellido');
        let seg_apellido = $('#seg_apellido');
        let documento = $('#documento');

        $('.select2').select2({
            language: "es"
        });


        $("#pri_nombre, #pri_apellido, #documento").change(function() {
            pri_nombre.removeClass('is-invalid');
            pri_apellido.removeClass('is-invalid');
            documento.removeClass('is-invalid');
        });
        $("#documento").change(function() {
            pri_nombre.val("");
            seg_nombre.val("");
            pri_apellido.val("");
            seg_apellido.val("");
        });

        function validarCampos(){
            if (pri_nombre.val() == "" && pri_apellido.val() == "" && documento.val() == "") {
                pri_nombre.addClass('is-invalid');
                pri_apellido.addClass('is-invalid');
                documento.addClass('is-invalid');
                return false;
            }

            if (documento.val() != "") {
                return true;
            }

            if (pri_nombre.val() != "" && pri_apellido.val() != "") {
                return true;
            }else{
                if (pri_nombre.val() != "") {
                    pri_apellido.addClass('is-invalid');
                }else{
                    pri_nombre.addClass('is-invalid');
                }
            }
        }
      

        $(".buscar_persona").click(function() {
            if (validarCampos()) {
                
            data={
                    "s_primer_nombre":pri_nombre.val(),
                    "s_segundo_nombre":seg_nombre.val(),
                    "s_primer_apellido":pri_apellido.val(),
                    "s_segundo_apellido":seg_apellido.val(),
                    "s_documento":documento.val()
                };

                $.ajax({
                    url: "{{ route('gestmaca.buscarnnajs')}}",
                    type: 'GET',
                    data: {
                        'data': data,
                        "_token": "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function(json) {
                       console.log(json)
                    },
                    error: function(xhr, status) {
                        alert('Disculpe, existiÃ³ un problema');
                    }
                });
            }
        });
        
    });

</script>
