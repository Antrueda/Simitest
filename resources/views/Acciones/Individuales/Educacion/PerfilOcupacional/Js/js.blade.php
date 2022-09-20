<script>

$(document).ready(function() {
        ///cuando se envie el formulario y lo devuelva por alguna validacion volver a activar los botones y dejar en finalizar
        @if(old('items'))
            @foreach ($todoxxxx['componentes'] as $key4 => $tab)
                $('#step'+({{$key4+1}})+'-tab').removeClass('bg-secondary')
                $('#step'+({{$key4+1}})+'-tab').addClass('bg-primary')
            @endforeach

            $('#step1').removeClass('active');
            $('#step_finalizar').addClass('active')
            $('#step_finalizar'+'-tab').removeClass('bg-secondary bg-primary')
            $('#step_finalizar'+'-tab').addClass('bg-info')

            sumatotal();
        @endif

        // al editar recargar sumatoria subtotal
        @foreach ($todoxxxx['componentes'] as $key5 => $tab)
            changeSubTotal("step"+({{$key5+1}}));
        @endforeach
});
    //poner select2
$('.select2').select2({
        language: "es",
        //theme: 'bootstrap4'
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

function soloNumeros(e) {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }



///textarea contar caracteres
init_contadorTa("senias", "contadorsenias", 1000);
init_contadorTa("concepto_perfil", "contador_concepto_perfil", 4000);

///funcion cambio de componente
function check(tab_actual,numeroitems,numerotabs){

    if (!validarCampos(tab_actual,numeroitems)) {
        return false; 
    }

    if (tab_actual === numerotabs) {
        $('#step'+tab_actual).removeClass('active');
        $('#step_finalizar').addClass('active')

        $('#step'+tab_actual+'-tab').removeClass('bg-secondary bg-info')
        $('#step'+tab_actual+'-tab').addClass('bg-primary')

        $('#step_finalizar'+'-tab').removeClass('bg-secondary bg-primary')
        $('#step_finalizar'+'-tab').addClass('bg-info')

        sumatotal();
    }else{
        let siguiente_tab = tab_actual+1;
        $('#step'+tab_actual).removeClass('active');
        $('#step'+siguiente_tab).addClass('active');


        $('#step'+tab_actual+'-tab').removeClass('bg-secondary bg-info')
        $('#step'+tab_actual+'-tab').addClass('bg-primary')

        $('#step'+siguiente_tab+'-tab').removeClass('bg-secondary bg-primary')
        $('#step'+siguiente_tab+'-tab').addClass('bg-info')
    }
   
}

///funcion para retroceder o atro tap
function check_back(tab_actual,ultimo){    
        let atras_tab = tab_actual-1;
       if (ultimo) {
            $('#step_finalizar').removeClass('active');
            $('#step'+atras_tab).addClass('active');

            $('#step'+atras_tab+'-tab').removeClass('bg-secondary bg-primary')
            $('#step'+atras_tab+'-tab').addClass('bg-info')

            $('#step_finalizar'+'-tab').removeClass('bg-info bg-primary')
            $('#step_finalizar'+'-tab').addClass('bg-secondary')
       }else{
            $('#step'+tab_actual).removeClass('active');
            $('#step'+atras_tab).addClass('active');

            $('#step'+tab_actual+'-tab').removeClass('bg-primary bg-info')
            $('#step'+tab_actual+'-tab').addClass('bg-secondary')

            $('#step'+atras_tab+'-tab').removeClass('bg-secondary bg-primary')
            $('#step'+atras_tab+'-tab').addClass('bg-info')
       }
}

// sumatoria total de todos los items
function sumatotal(){

   let items = $("#main_form .select_preguntas_perfil");
   let suma=0;
   for (let index = 0; index < items.length; index++) {
        const element = items[index];
     
        if (element.value !== "") {
            suma += parseInt(element.value);
        }
    }

    if (suma >= 0 && suma < 82) {
        document.getElementById('total_puntos').innerHTML='<p class="">Total, puntos <strong>'+suma+'</strong>: Lo que quiere decir que el/la Joven cuenta con un Desempeño de Baja Funcionalidad.</p>'; 
    } else if(suma >= 82 && suma < 163){
        document.getElementById('total_puntos').innerHTML='<p class="">Total, puntos <strong>'+suma+'</strong>: Lo que quiere decir que el/la Joven cuenta con un Desempeño Semifuncional.</p>'; 
    }else if(suma >= 163 && suma < 248){
        document.getElementById('total_puntos').innerHTML='<p class="">Total, puntos <strong>'+suma+'</strong>: Lo que quiere decir que el/la Joven cuenta con un Desempeño Funcional.</p>'; 
    }else{
        document.getElementById('total_puntos').innerHTML=''; 
    }
    $("#total_test").val(suma);
}

// validar que los campos esten seleccionados por componente de desempeno y avanzar
function validarCampos(tab_actual,numeroitems){
    var camposCompletos=0;

    for (let index = 1; index <= numeroitems; index++) {
        var campo = $('#step'+tab_actual+'_'+index).val();
        
        
        if(campo == ""){
            $('#step'+tab_actual+'_'+index).siblings('span').addClass("border border-danger rounded");
            camposCompletos++;
        }
    }

    if (camposCompletos > 0) {
        document.getElementById('alrt').innerHTML='<div class="alert alert-warning">Por favor complete todos los ítems para continuar.</div>'; 
        setTimeout(function() {document.getElementById('alrt').innerHTML='';},3000);
        return false;
    } else {
        return true;
    }
}

//mostrar sudtotal suma por componente de desempeno
function changeSubTotal(tab_actual){
    var opciones = $('#'+tab_actual+' select');
    let suma=0;

    for (let index = 0; index < opciones.length; index++) {
        const element = opciones[index];
        if (element.value !== "") {
            suma += parseInt(element.value);
        }
    }
    document.getElementById(tab_actual+'_subtotal').innerHTML='<strong>'+suma+'</strong>'; 
}


// validar fecha no superior al dia actual
$("#main_form #d_fecha_diligencia").change(function(){
   let campo = $('#d_fecha_diligencia');
   const fecha = new Date().toISOString().slice(0, 10);
   
   if (campo.val() > fecha) {
        campo.val('');
        campo.addClass("border border-danger");
        campo.after('<div class="invalid-feedback d-block">No está permitido ingresar información con fecha superiores a hoy.</div>');
   }
})

//limpiar alert de errores borde de caja
$("#main_form .select2").click(function(){
    $(this).removeClass('border border-danger');
})
$("#d_fecha_diligencia").click(function(){
   $(this).removeClass('border border-danger');
   $("#d_fecha_diligencia").siblings('.invalid-feedback').remove();   
})

</script>


