<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(function(){
        $('.select2').select2({
            language: "es"
        });

        mostrarSeleccionados();
        $('.check_actividades').change(function() {
            if (seleccionados() <= 30) {
                mostrarSeleccionados();
            }else{
                $(this).prop('checked',false);
                toastr.warning('No puede seleccionar más de 30 actividades.');
            }
        });

    });

    function seleccionados(){
        //Creamos una Variable y Obtenemos el Numero de Checkbox que esten Seleccionados
        let checked = $(".check_actividades:checked").length; 
	    return checked;
    }

    function mostrarSeleccionados() {
        let checked = seleccionados();
        $(".n-seleccionados").text(checked); 
    }

    $('.submit-pvf').click(function() {
        let checked = $(".check_actividades:checked").length; 

        if (checked === 0) {
            toastr.warning('Tiene que seleccionar como mínimo una actividad.');
            return false;
        }
        
        return true;
    });

</script>
