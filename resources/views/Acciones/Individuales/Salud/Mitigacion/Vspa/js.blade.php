<script>
    $(document).ready(function(){
        $('#prm_upi_id').select2({
            language: "es"
        });
        $('#user_doc1_id').select2({
            language: "es"
        });
    });
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
    function doc(valor){
        if(valor == 227){
            document.getElementById("semanas_gestacion").hidden=false;
        } else {
            document.getElementById("semanas_gestacion").hidden=true;
            document.getElementById("semanas_gestacion").value='';
        }
    }
    function doc1(valor){
        if(valor == 227){
            document.getElementById("prm_cantidad_id").hidden=false;
            document.getElementById("prm_inyectadas_id").hidden=false;
            document.getElementById("observaciones").hidden=false;
            document.getElementById("prm_droga_ini_id").hidden=false;
            document.getElementById("prm_droga_dos_id").hidden=false;
            document.getElementById("prm_droga_tres_id").hidden=false;
            document.getElementById("prm_droga_cuatro_id").hidden=false;
            document.getElementById("prm_droga_cinco_id").hidden=false;
            document.getElementById("prm_droga_seis_id").hidden=false;
            document.getElementById("prm_droga_siete_id").hidden=false;
            document.getElementById("prm_droga_dmi_id").hidden=false;
            document.getElementById("prm_cuatro_uno_id").hidden=false;
            document.getElementById("prm_cuatro_dos_id").hidden=false;
            document.getElementById("prm_cuatro_tres_id").hidden=false;
            document.getElementById("prm_cuatro_cuatro_id").hidden=false;
            document.getElementById("prm_cuatro_cinco_id").hidden=false;
            document.getElementById("prm_cuatro_seis_id").hidden=false;
            document.getElementById("prm_cuatro_siete_id").hidden=false;
            document.getElementById("prm_cuatro_ocho_id").hidden=false;
            document.getElementById("prm_cuatro_nueve_id").hidden=false;
            document.getElementById("prm_cuatro_diez_id").hidden=false;
            document.getElementById("prm_cuatro_once_id").hidden=false;
            document.getElementById("prm_cuatro_doce_id").hidden=false;
            document.getElementById("prm_cinco_uno_id").hidden=false;
            document.getElementById("prm_cinco_dos_id").hidden=false;
            document.getElementById("prm_cinco_tres_id").hidden=false;
            document.getElementById("prm_cinco_cuatro_id").hidden=false;
            document.getElementById("prm_cinco_cinco_id").hidden=false;
            document.getElementById("prm_cinco_seis_id").hidden=false;
            document.getElementById("prm_cinco_siete_id").hidden=false;
            document.getElementById("prm_cinco_ocho_id").hidden=false;
            document.getElementById("prm_cinco_nueve_id").hidden=false;
            document.getElementById("prm_cinco_diez_id").hidden=false;
            document.getElementById("prm_cinco_once_id").hidden=false;
            document.getElementById("prm_cinco_doce_id").hidden=false;
        } else {
            document.getElementById("prm_cantidad_id").hidden=true;
            document.getElementById("prm_cantidad_id").value="";
            doc2(document.getElementById('prm_inyectadas_id').value=228);
            document.getElementById("prm_inyectadas_id").hidden=true;
            document.getElementById("observaciones").hidden=true;
            document.getElementById("observaciones").value="";
            doc3(document.getElementById('prm_droga_ini_id').value='');
            document.getElementById("prm_droga_ini_id").hidden=true;
            doc4(document.getElementById('prm_droga_dos_id').value='');
            document.getElementById("prm_droga_dos_id").hidden=true;
            doc5(document.getElementById('prm_droga_tres_id').value='');
            document.getElementById("prm_droga_tres_id").hidden=true;
            doc6(document.getElementById('prm_droga_cuatro_id').value='');
            document.getElementById("prm_droga_cuatro_id").hidden=true;
            doc7(document.getElementById('prm_droga_cinco_id').value='');
            document.getElementById("prm_droga_cinco_id").hidden=true;
            doc8(document.getElementById('prm_droga_seis_id').value='');
            document.getElementById("prm_droga_seis_id").hidden=true;
            doc9(document.getElementById('prm_droga_siete_id').value='');
            document.getElementById("prm_droga_siete_id").hidden=true;
            doc10(document.getElementById('prm_droga_dmi_id').value='');
            document.getElementById("prm_droga_dmi_id").hidden=true;
            document.getElementById("prm_cuatro_uno_id").hidden=true;
            document.getElementById("prm_cuatro_dos_id").hidden=true;
            document.getElementById("prm_cuatro_tres_id").hidden=true;
            document.getElementById("prm_cuatro_cuatro_id").hidden=true;
            document.getElementById("prm_cuatro_cinco_id").hidden=true;
            document.getElementById("prm_cuatro_seis_id").hidden=true;
            document.getElementById("prm_cuatro_siete_id").hidden=true;
            document.getElementById("prm_cuatro_ocho_id").hidden=true;
            document.getElementById("prm_cuatro_nueve_id").hidden=true;
            document.getElementById("prm_cuatro_diez_id").hidden=true;
            document.getElementById("prm_cuatro_once_id").hidden=true;
            document.getElementById("prm_cuatro_doce_id").hidden=true;
            document.getElementById("prm_cinco_uno_id").hidden=true;
            document.getElementById("prm_cinco_dos_id").hidden=true;
            document.getElementById("prm_cinco_tres_id").hidden=true;
            document.getElementById("prm_cinco_cuatro_id").hidden=true;
            document.getElementById("prm_cinco_cinco_id").hidden=true;
            document.getElementById("prm_cinco_seis_id").hidden=true;
            document.getElementById("prm_cinco_siete_id").hidden=true;
            document.getElementById("prm_cinco_ocho_id").hidden=true;
            document.getElementById("prm_cinco_nueve_id").hidden=true;
            document.getElementById("prm_cinco_diez_id").hidden=true;
            document.getElementById("prm_cinco_once_id").hidden=true;
            document.getElementById("prm_cinco_doce_id").hidden=true;
        }
    }
    function doc2(valor) {
        if(valor == 227){
            document.getElementById("edad_inicio").hidden=false;
            document.getElementById("prm_dificultad_id").hidden=false;
            document.getElementById("descripcion").hidden=false;
            document.getElementById("descripcion").hidden=false;
            document.getElementById("prm_obtiene_id").hidden=false;
            document.getElementById("donde").hidden=false;
            document.getElementById("precio").hidden=false;
            document.getElementById("cantidad").hidden=false;
            document.getElementById("prm_medida_id").hidden=false;
            document.getElementById("prm_frecuencia_id").hidden=false;
            document.getElementById("prm_costumbre_id").hidden=false;
            document.getElementById("porque").hidden=false;
            document.getElementById("sustancia").hidden=false;
            document.getElementById("prm_comparte_id").hidden=false;
            document.getElementById("porque_comparte").hidden=false;
            document.getElementById("prm_prueba_id").hidden=false;
            document.getElementById("porque_prueba").hidden=false;
        } else {
            document.getElementById("edad_inicio").hidden=true;
            document.getElementById("edad_inicio").value='';
            document.getElementById("prm_dificultad_id").hidden=true;
            document.getElementById("prm_dificultad_id").value='';
            document.getElementById("descripcion").hidden=true;
            document.getElementById("descripcion").value='';
            document.getElementById("prm_obtiene_id").hidden=true;
            document.getElementById("prm_obtiene_id").value='';
            document.getElementById("donde").hidden=true;
            document.getElementById("donde").value='';
            document.getElementById("precio").hidden=true;
            document.getElementById("precio").value='';
            document.getElementById("cantidad").hidden=true;
            document.getElementById("cantidad").value='';
            document.getElementById("prm_medida_id").hidden=true;
            document.getElementById("prm_medida_id").value='';
            document.getElementById("prm_frecuencia_id").hidden=true;
            document.getElementById("prm_frecuencia_id").value='';
            document.getElementById("prm_costumbre_id").hidden=true;
            document.getElementById("prm_costumbre_id").value='';
            document.getElementById("porque").hidden=true;
            document.getElementById("porque").value='';
            document.getElementById("sustancia").hidden=true;
            document.getElementById("sustancia").value='';
            document.getElementById("prm_comparte_id").hidden=true;
            document.getElementById("prm_comparte_id").value='';
            document.getElementById("porque_comparte").hidden=true;
            document.getElementById("porque_comparte").value='';
            document.getElementById("prm_prueba_id").hidden=true;
            document.getElementById("prm_prueba_id").value='';
            document.getElementById("porque_prueba").hidden=true;
            document.getElementById("porque_prueba").value='';
        }
    }
    function doc3(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_ini_id").hidden=true;
            document.getElementById("prm_via_ini_id").hidden=true;
            document.getElementById("primera_ini").hidden=true;
            document.getElementById("primera_ini").value='';
            document.getElementById("prm_mes_ini_id").hidden=true;
            document.getElementById("prm_anio_ini_id").hidden=true;
            document.getElementById("ultima_ini").hidden=true;
            document.getElementById("ultima_ini").value='';
            document.getElementById("prm_imp_ini_id").hidden=true;
        } else {
            document.getElementById("prm_fre_ini_id").hidden=false;
            document.getElementById("prm_via_ini_id").hidden=false;
            document.getElementById("primera_ini").hidden=false;
            document.getElementById("prm_mes_ini_id").hidden=false;
            document.getElementById("prm_anio_ini_id").hidden=false;
            document.getElementById("ultima_ini").hidden=false;
            document.getElementById("prm_imp_ini_id").hidden=false;
        }
    }
    function doc4(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_dos_id").hidden=true;
            document.getElementById("prm_via_dos_id").hidden=true;
            document.getElementById("primera_dos").hidden=true;
            document.getElementById("primera_dos").value='';
            document.getElementById("prm_mes_dos_id").hidden=true;
            document.getElementById("prm_anio_dos_id").hidden=true;
            document.getElementById("ultima_dos").hidden=true;
            document.getElementById("ultima_dos").value='';
            document.getElementById("prm_imp_dos_id").hidden=true;
        } else {
            document.getElementById("prm_fre_dos_id").hidden=false;
            document.getElementById("prm_via_dos_id").hidden=false;
            document.getElementById("primera_dos").hidden=false;
            document.getElementById("prm_mes_dos_id").hidden=false;
            document.getElementById("prm_anio_dos_id").hidden=false;
            document.getElementById("ultima_dos").hidden=false;
            document.getElementById("prm_imp_dos_id").hidden=false;
        }
    }
    function doc5(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_tres_id").hidden=true;
            document.getElementById("prm_via_tres_id").hidden=true;
            document.getElementById("primera_tres").hidden=true;
            document.getElementById("primera_tres").value='';
            document.getElementById("prm_mes_tres_id").hidden=true;
            document.getElementById("prm_anio_tres_id").hidden=true;
            document.getElementById("ultima_tres").hidden=true;
            document.getElementById("ultima_tres").value='';
            document.getElementById("prm_imp_tres_id").hidden=true;
        } else {
            document.getElementById("prm_fre_tres_id").hidden=false;
            document.getElementById("prm_via_tres_id").hidden=false;
            document.getElementById("primera_tres").hidden=false;
            document.getElementById("prm_mes_tres_id").hidden=false;
            document.getElementById("prm_anio_tres_id").hidden=false;
            document.getElementById("ultima_tres").hidden=false;
            document.getElementById("prm_imp_tres_id").hidden=false;
        }
    }
    function doc6(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_cuatro_id").hidden=true;
            document.getElementById("prm_via_cuatro_id").hidden=true;
            document.getElementById("primera_cuatro").hidden=true;
            document.getElementById("primera_cuatro").value='';
            document.getElementById("prm_mes_cuatro_id").hidden=true;
            document.getElementById("prm_anio_cuatro_id").hidden=true;
            document.getElementById("ultima_cuatro").hidden=true;
            document.getElementById("ultima_cuatro").value='';
            document.getElementById("prm_imp_cuatro_id").hidden=true;
        } else {
            document.getElementById("prm_fre_cuatro_id").hidden=false;
            document.getElementById("prm_via_cuatro_id").hidden=false;
            document.getElementById("primera_cuatro").hidden=false;
            document.getElementById("prm_mes_cuatro_id").hidden=false;
            document.getElementById("prm_anio_cuatro_id").hidden=false;
            document.getElementById("ultima_cuatro").hidden=false;
            document.getElementById("prm_imp_cuatro_id").hidden=false;
        }
    }
    function doc7(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_cinco_id").hidden=true;
            document.getElementById("prm_via_cinco_id").hidden=true;
            document.getElementById("primera_cinco").hidden=true;
            document.getElementById("primera_cinco").value='';
            document.getElementById("prm_mes_cinco_id").hidden=true;
            document.getElementById("prm_anio_cinco_id").hidden=true;
            document.getElementById("ultima_cinco").hidden=true;
            document.getElementById("ultima_cinco").value='';
            document.getElementById("prm_imp_cinco_id").hidden=true;
        } else {
            document.getElementById("prm_fre_cinco_id").hidden=false;
            document.getElementById("prm_via_cinco_id").hidden=false;
            document.getElementById("primera_cinco").hidden=false;
            document.getElementById("prm_mes_cinco_id").hidden=false;
            document.getElementById("prm_anio_cinco_id").hidden=false;
            document.getElementById("ultima_cinco").hidden=false;
            document.getElementById("prm_imp_cinco_id").hidden=false;
        }
    }
    function doc8(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_seis_id").hidden=true;
            document.getElementById("prm_via_seis_id").hidden=true;
            document.getElementById("primera_seis").hidden=true;
            document.getElementById("primera_seis").value='';
            document.getElementById("prm_mes_seis_id").hidden=true;
            document.getElementById("prm_anio_seis_id").hidden=true;
            document.getElementById("ultima_seis").hidden=true;
            document.getElementById("ultima_seis").value='';
            document.getElementById("prm_imp_seis_id").hidden=true;
        } else {
            document.getElementById("prm_fre_seis_id").hidden=false;
            document.getElementById("prm_via_seis_id").hidden=false;
            document.getElementById("primera_seis").hidden=false;
            document.getElementById("prm_mes_seis_id").hidden=false;
            document.getElementById("prm_anio_seis_id").hidden=false;
            document.getElementById("ultima_seis").hidden=false;
            document.getElementById("prm_imp_seis_id").hidden=false;
        }
    }
    function doc9(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_siete_id").hidden=true;
            document.getElementById("prm_via_siete_id").hidden=true;
            document.getElementById("primera_siete").hidden=true;
            document.getElementById("primera_siete").value='';
            document.getElementById("prm_mes_siete_id").hidden=true;
            document.getElementById("prm_anio_siete_id").hidden=true;
            document.getElementById("ultima_siete").hidden=true;
            document.getElementById("ultima_siete").value='';
            document.getElementById("prm_imp_siete_id").hidden=true;
        } else {
            document.getElementById("prm_fre_siete_id").hidden=false;
            document.getElementById("prm_via_siete_id").hidden=false;
            document.getElementById("primera_siete").hidden=false;
            document.getElementById("prm_mes_siete_id").hidden=false;
            document.getElementById("prm_anio_siete_id").hidden=false;
            document.getElementById("ultima_siete").hidden=false;
            document.getElementById("prm_imp_siete_id").hidden=false;
        }
    }
    function doc10(valor) {
        if(valor == ''){
            document.getElementById("prm_fre_dmi_id").hidden=true;
            document.getElementById("prm_via_dmi_id").hidden=true;
            document.getElementById("primera_dmi").hidden=true;
            document.getElementById("primera_dmi").value='';
            document.getElementById("prm_mes_dmi_id").hidden=true;
            document.getElementById("prm_anio_dmi_id").hidden=true;
            document.getElementById("ultima_dmi").hidden=true;
            document.getElementById("ultima_dmi").value='';
            document.getElementById("prm_imp_dmi_id").hidden=true;
        } else {
            document.getElementById("prm_fre_dmi_id").hidden=false;
            document.getElementById("prm_via_dmi_id").hidden=false;
            document.getElementById("primera_dmi").hidden=false;
            document.getElementById("prm_mes_dmi_id").hidden=false;
            document.getElementById("prm_anio_dmi_id").hidden=false;
            document.getElementById("ultima_dmi").hidden=false;
            document.getElementById("prm_imp_dmi_id").hidden=false;
        }
    }

    function carga() {
        doc(document.getElementById('prm_gestante_id').value);
        doc1(document.getElementById('prm_probado_id').value);
        doc2(document.getElementById('prm_inyectadas_id').value);
        doc3(document.getElementById('prm_droga_ini_id').value);
        doc4(document.getElementById('prm_droga_dos_id').value);
        doc5(document.getElementById('prm_droga_tres_id').value);
        doc6(document.getElementById('prm_droga_cuatro_id').value);
        doc7(document.getElementById('prm_droga_cinco_id').value);
        doc8(document.getElementById('prm_droga_seis_id').value);
        doc9(document.getElementById('prm_droga_siete_id').value);
        doc10(document.getElementById('prm_droga_dmi_id').value);
        calcularEdad(document.getElementById('nacimiento').value);
    }
    window.onload = carga();
</script>
