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


        //////pie chart

        var donutData        = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [
                {
                data: [700,500,400,600,300,100],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }
            ]
        }
        
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData        = donutData;
        var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
        })
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

    init_contadorTa("observaciones", "contador_observaciones", 4000);
    init_contadorTa("concepto", "contador_concepto", 4000);
</script>
