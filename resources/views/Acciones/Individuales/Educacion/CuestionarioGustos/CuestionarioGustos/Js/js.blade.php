<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
        let old_tipoacti = '{{ old("tipoacti_id") }}';




    $(function(){// implemento funcion de  Select2
        $('.select2').select2({
            language: "es"
        });

        // llamo la cantidad de limites de habilidades a seleccionar  por administracion 
        let numero =parseInt('{{$todoxxxx['limites']->limite}}');
        mostrarSeleccionados();
        $('.check_habilidades').change(function() {// es el evento al seleccionar 
            if (seleccionados() <= numero) { // crear la variable y cambiarlo por el 36 para qeu sea el limite de las habilidades
                mostrarSeleccionados();
            }else{
                $(this).prop('checked',false);
                toastr.warning('No puede seleccionar más de '+numero+' habilidades segun la administracion.');
            }
        });



        @if (isset($todoxxxx['puedetiempo'])) 
            let fechaactual = '<?= $todoxxxx['puedetiempo']['actualxx'] ?>';
                fechaactual = new Date(fechaactual +'T00:00:00');
            
            let fechalimite = '<?= $todoxxxx['puedetiempo']['fechlimi'] ?>';
                fechalimite = new Date(fechalimite +'T00:00:00')

            $('#fecha').mask('0000-00-00');
            let datepick = $("#fecha");
            datepick.datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true,
                minDate: new Date(fechalimite),
                maxDate: new Date(fechaactual),
            });
        @endif
    });

    function seleccionados(){
        //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
        let checked = $(".check_habilidades:checked").length; 
	    return checked;
    }

    function mostrarSeleccionados() {
        let checked = seleccionados();
        $(".n-seleccionados").text(checked); 
    }

    $('.submit-pvf').click(function() {
        let checked = $(".check_habilidades:checked").length; 

            if (checked === 0) {
                toastr.warning('Seleccione  como mínimo una Habilidad por Item.');
                return false;
            }
        
        return true;
    });

    function init_contadorTa(idtextarea, idcontador, max) {
        $("#" + idtextarea).keyup(function() {
            updateContadorTa(idtextarea, idcontador, max);
        });
        $("#" + idtextarea).change(function() {
            updateContadorTa(idtextarea, idcontador, max);
        });
    }

    function updateContadorTa(idtextarea, idcontador, max) {
        var contador = $("#" + idcontador);
        var ta = $("#" + idtextarea);
        contador.html("0/" + max);
        contador.html(ta.val().length + "/" + max);
        if (parseInt(ta.val().length) > max) {
            ta.val(ta.val().substring(0, max - 1));
            contador.html(max + "/" + max);
        }
    }


</script>
