<script>
    $(document).ready(function() {
        var dataurlx='';
        @if(isset($todoxxxx['nnajregi']))
            dataurlx={
                url:"{{ url($todoxxxx['urlxxxxx'])  }}",
                data:{nnajxxxx:{{ $todoxxxx['nnajregi'] }}}
            }
        @else
            dataurlx={
                url:"{{ url($todoxxxx['urlxxxxx'])  }}"
            }
        @endif

        $('#{{ $tableName }}').DataTable({
            "serverSide": true,
            "ajax":dataurlx,
            "columns":[
                @foreach($todoxxxx['columnsx'] as $columnsx){
                    data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'
                },
                @endforeach
            ],
            "language": {
                "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
            }
        });
        $('#i_responsable').select2({
            language: "es"
        });
    });

    @if(isset($todoxxxx['nnajregi']))
        $(function(){
            $('#i_primer_responsable').select2({
                language: "es"
            });
            $('#i_segundo_responsable').select2({
                language: "es"
            });
        });
        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toString();
            //Se define todo el abecedario que se quiere que se muestre.
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
            //Es la validación del KeyCodes, que teclas recibe el campo de texto.
            especiales = [8, 37, 39, 46, 6];
            tecla_especial = false
            for(var i in especiales) {
                if(key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }
            if(letras.indexOf(tecla) == -1 && !tecla_especial){
                return false;
            }
        }

        function soloNumeros(e){
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
                return true;
            return /\d/.test(String.fromCharCode(keynum));
        }

        // CONTADOR DE CARACTERES
        init_contadorTal("s_observacion","contadorobservacion", 4000);

        function init_contadorTal(idtextarea, idcontador, max){
            $("#"+idtextarea).keyup(function(){
                updateContadorTal(idtextarea, idcontador, max);
            });
            $("#"+idtextarea).change(function(){
                updateContadorTal(idtextarea, idcontador, max);
            });

        }

        function updateContadorTal(idtextarea, idcontador,max){
            var contador = $("#"+idcontador);
            var ta =     $("#"+idtextarea);
            contador.html("0/"+max);
            contador.html(ta.val().length+"/"+max);
            if(parseInt(ta.val().length)>max){
                ta.val(ta.val().substring(0,max-1));
                contador.html(max+"/"+max);
            }
        }
        $(document).ready(function(){
            $("#prm_area_id").change(event => {
                var area = $("select#prm_area_id option:checked").val();
                if (area != '') {
                    $.get(`tipoSeguimiento/`+area, function(res, sta){
                        $("#prm_seguimiento_id").empty();
                        $("#prm_seguimiento_id").append(`<option value=""> Seleccione </option>`);
                        $("#prm_sub_tipo_id").empty();
                        $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                        res.forEach(element => {
                            $("#prm_seguimiento_id").append(`<option value=${element.id}> ${element.nombre} </option>`);
                        });
                    });
                    
                } else {
                    $("#prm_seguimiento_id").empty();
                    $("#prm_seguimiento_id").append(`<option value=""> Seleccione </option>`);
                    $("#prm_sub_tipo_id").empty();
                    $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                }
            });
            $("#prm_seguimiento_id").change(event => {
                var area = $("select#prm_area_id option:checked").val();
                var seguimiento = $("select#prm_seguimiento_id option:checked").val();
                if (seguimiento != '') {
                    $.get(`subTipoSeguimiento/`+area+`/`+seguimiento, function(res, sta){
                        $("#prm_sub_tipo_id").empty();
                        $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                        res.forEach(element => {
                            $("#prm_sub_tipo_id").append(`<option value=${element.id}> ${element.nombre} </option>`);
                            $('[data-toggle="tooltip"]').tooltip();
                        });
                    });
                    
                } else {
                    $("#prm_sub_tipo_id").empty();
                    $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                }
            });

        })
    @endif
</script>
