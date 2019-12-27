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
        $('#prm_area_id').select2({
            language: "es"
        });
        $('#sis_dependencia_id').select2({
            language: "es"
        });
        $('#prm_seguimiento_id').select2({
            language: "es"
        });
        $('#prm_sub_tipo_id').select2({
            language: "es"
        });
    });

    @if(isset($todoxxxx['nnajregi']))
        $(function(){
            var f_cargos = function (dataxxxx){ 
                $.ajax({
                    url: "{{ route('fos.fichaobservacion.obtenerTipoSeguimientos')}}",
                    type: 'GET',
                    data: dataxxxx.dataxxxx,
                    dataType: 'json',
                    success: function (json){
                        $(json.campoxxx).empty();
                        $.each(json.comboxxx, function (id, data) {
                            var selected = '';
                            if (data.valuexxx == dataxxxx.selected) {
                                selected = 'selected';
                            }
                            $(json.campoxxx).append('<option ' + selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                        });
                    },
                    error: function (xhr, status) {
                        alert('Disculpe, existe un problema');
                    }
                });
            }

            //Recuperar datos en caso de tener errores en las validaciones
            @if(old('prm_area_id')!=null)
                $("#prm_sub_tipo_id").empty();
                $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                f_cargos({
                    selected:'{{ old("prm_seguimiento_id") }}',
                    dataxxxx:{
                        valuexxx:"{{ old('prm_area_id') }}",
                        'tipoxxxx':1
                    }
                });
                @if(old('prm_seguimiento_id')!=null)
                    f_cargos({
                        selected:"{{ old('prm_sub_tipo_id') }}",
                        dataxxxx:{
                            valuexxx:"{{ old('prm_seguimiento_id') }}",
                            valuexx1:"{{ old('prm_area_id') }}",
                            'tipoxxxx':2 
                        }
                    });
                @endif
            @endif

            $("#prm_area_id").change(function(){
                $("#prm_sub_tipo_id").empty();
                $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                f_cargos({
                    selected:'',
                    dataxxxx:{
                        valuexxx:$(this).val(),
                        'tipoxxxx':1
                    } 
                });
            });

            $("#prm_seguimiento_id").change(function(){
                $("#prm_sub_tipo_id").empty();
                $("#prm_sub_tipo_id").append(`<option value=""> Seleccione </option>`);
                f_cargos({
                    selected:'',
                    dataxxxx:{
                        valuexxx:$(this).val(),
                        valuexx1:$('#prm_area_id').val(),
                        'tipoxxxx':2 
                    }
                });
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
    @endif
</script>
