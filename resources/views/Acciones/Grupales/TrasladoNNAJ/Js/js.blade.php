<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
        $(function(){
            var f_cargos = function (dataxxxx){ 
                $.ajax({
                    url: "{{ route('fosfichaobservacion.obtenerTipoSeguimientos')}}",
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
            @if(old('area_id')!=null)
                $("#fos_stse_id").empty();
                f_cargos({
                    selected:'{{ old("fos_tse_id") }}',
                    dataxxxx:{
                        valuexxx:"{{ old('area_id') }}",
                        'tipoxxxx':1
                    }
                });
                @if(old('fos_tse_id')!=null)
                    f_cargos({
                        selected:"{{ old('fos_stse_id') }}",
                        dataxxxx:{
                            valuexxx:"{{ old('fos_tse_id') }}",
                            valuexx1:"{{ old('area_id') }}",
                            'tipoxxxx':2 
                        }
                    });
                @endif
            @endif

            $("#area_id").change(function(){
                $("#fos_stse_id").empty();
                f_cargos({
                    selected:'',
                    dataxxxx:{
                        valuexxx:$(this).val(),
                        'tipoxxxx':1
                    } 
                });
            });

            $("#fos_tse_id").change(function(){
                $("#fos_stse_id").empty();
                $("#fos_stse_id").append(`<option value=""> Seleccione </option>`);
                f_cargos({
                    selected:'',
                    dataxxxx:{
                        valuexxx:$(this).val(),
                        valuexx1:$('#area_id').val(),
                        'tipoxxxx':2 
                    }
                });
            });


            var f_repsable = function(dataxxxx) {
            $.ajax({
                url: "{{ route('aisalidamenores.responsa')}}",
                type: 'GET',
                data: dataxxxx.dataxxxx,
                dataType: 'json',
                success: function(json) { 
                    $(json.campoxxx).empty();
                    $.each(json.comboxxx, function(id, data) { console.log(data)
                        $(json.campoxxx).append('<option ' + data.selected + ' value="' + data.valuexxx + '">' + data.optionxx + '</option>');
                    });
                },
                error: function(xhr, status) {
                  //  alert('Disculpe, existe un problema las buscar el responsable de la upi');
                }
            });
        }
        $('#sis_depen_id').change(function() {
          f_repsable({dataxxxx:{padrexxx:$(this).val(),selected:''}})
        });

            var f_tooltip=function(dataxxxx){  
        var propieda=dataxxxx.thisxxxx.attr('propiedad'); 
        var elemento=$("#"+propieda).val();
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
    </script>
