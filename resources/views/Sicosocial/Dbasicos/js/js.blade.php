<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(document).ready(function() {
    $('#emociones').select2({
        language: "es"
    });
    $('#situaciones').select2({
        language: "es"
    });
});
function doc(valor){
	if(valor == 228){
		document.getElementById("i_prm_ayuda_id").hidden=false;
	} else {
		document.getElementById("i_prm_ayuda_id").hidden=true;
		document.getElementById("i_prm_ayuda_id").value='';
	}
}
function calcularEdad(fecha){
    var values=fecha.split("-");
    var dia = values[2];
    var mes = values[1];
    var ano = values[0];
    // cogemos los valores actuales
    var fecha_hoy = new Date();
    var ahora_ano = fecha_hoy.getYear();
    var ahora_mes = fecha_hoy.getMonth()+1;
    var ahora_dia = fecha_hoy.getDate();
    // realizamos el calculo
    var edad = (ahora_ano + 1900) - ano;
    if ( ahora_mes < mes ){
        edad--;
    }
    if ((mes == ahora_mes) && (ahora_dia < dia)){
        edad--;
    }
    if (edad > 1900){
        edad -= 1900;
    }
    // calculamos los meses
    var meses=0;
    if(ahora_mes>mes)
        meses=ahora_mes-mes;
    if(ahora_mes<mes)
        meses=12-(mes-ahora_mes);
    if(ahora_mes==mes && dia>ahora_dia)
        meses=11;
    // calculamos los dias
    var dias=0;
    if(ahora_dia>dia)
        dias=ahora_dia-dia;
    if(ahora_dia<dia){
        ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
        dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
    }
    if(edad > 100){
        document.getElementById("edad").innerHTML="";
    } else {
        document.getElementById("edad").innerHTML=edad+" años, "+meses+" meses y "+dias+" días";
    }
}
function carga() {
	doc(document.getElementById('prm_doc_fisico_id').value);
    calcularEdad(document.getElementById('d_nacimiento').value);
}
window.onload=carga;

</script>
