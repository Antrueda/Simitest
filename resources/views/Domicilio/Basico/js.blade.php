<script>
var departamento =[
    @foreach($depajs as $d)
        @if($d->id > 1)
            [{{$d->id}}, "{{ $d->s_departamento }}"],
        @endif
    @endforeach
];
@foreach($depajs as $d)
    var depa_{{ $d->id }}=[
        @foreach($d->sis_municipios as $m)
            [{{$m->id}}, "{{ $m->s_municipio }}"],
        @endforeach
    ];
@endforeach
function doc(valor){
	if(valor == 228){
		document.getElementById("prm_sin_fisico_id").hidden=false;
	} else {
		document.getElementById("prm_sin_fisico_id").hidden=true;
		document.getElementById("prm_sin_fisico_id").value='';
	}
}
function doc1(valor){
    if(valor == 227){
        document.getElementById("prm_libreta_id").hidden=false;
    } else {
        document.getElementById("prm_libreta_id").hidden=true;
    }
}
function doc2(valor) {
    if (valor == 157) {
        document.getElementById("prm_cual_id").hidden=false;
    } else {
        document.getElementById("prm_cual_id").hidden=true;
    }
}
function doc3(valor) {
    if (valor == 20) {
        document.getElementById("prm_militar_id").hidden=false;
    } else {
        document.getElementById("prm_militar_id").hidden=true;
        doc1(document.getElementById('prm_militar_id').value == 228);
    }
}
function cambioPais(pais){
    if(pais == 2){
        depa=eval("departamento");
        num_depa = depa.length;
        document.forma.departamento_id.length = num_depa;
        for(i=0;i<num_depa;i++){
            document.forma.departamento_id.options[i].value=depa[i][0];
            document.forma.departamento_id.options[i].text=depa[i][1];
        }
    } else {
        document.forma.departamento_id.length = 1;
        document.forma.departamento_id.options[0].value = "1";
        document.forma.departamento_id.options[0].text = "NO APLICA";
    }
    document.forma.departamento_id.options[0].selected = true;
    cambiaDepartamento(document.forma.departamento_id.options[0].value);
}
function cambiaDepartamento(departamento){
    if (departamento !== '') {
        mi_ciudad=eval("depa_" + departamento);
        num_ciudad = mi_ciudad.length;
        document.forma.municipio_id.length = num_ciudad;
        for(i=0;i<num_ciudad;i++){
            document.forma.municipio_id.options[i].value=mi_ciudad[i][0];
            document.forma.municipio_id.options[i].text=mi_ciudad[i][1];
        }
    }else{
        document.forma.municipio_id.length = 1;
        document.forma.municipio_id.options[0].value = "1";
        document.forma.municipio_id.options[0].text = "NO APLICA";
    }
    document.forma.municipio_id.options[0].selected = true;
}
function cambioPais1(pais){
    if(pais == 2){
        depa=eval("departamento");
        num_depa = depa.length;
        document.forma.departamento_docum_id.length = num_depa;
        for(i=0;i<num_depa;i++){
            document.forma.departamento_docum_id.options[i].value=depa[i][0];
            document.forma.departamento_docum_id.options[i].text=depa[i][1];
        }
    } else {
        document.forma.departamento_docum_id.length = 1;
        document.forma.departamento_docum_id.options[0].value = "1";
        document.forma.departamento_docum_id.options[0].text = "NO APLICA";
    }
    document.forma.departamento_docum_id.options[0].selected = true;
    cambiaDepartamento1(document.forma.departamento_docum_id.options[0].value);
}
function cambiaDepartamento1(departamento){
    if (departamento !== '') {
        mi_ciudad=eval("depa_" + departamento);
        num_ciudad = mi_ciudad.length;
        document.forma.municipio_docum_id.length = num_ciudad+1;
        document.forma.municipio_docum_id.options[0].value = "";
        document.forma.municipio_docum_id.options[0].text = "Seleccione";
        for(i=0;i<num_ciudad;i++){
            document.forma.municipio_docum_id.options[i+1].value=mi_ciudad[i][0];
            document.forma.municipio_docum_id.options[i+1].text=mi_ciudad[i][1];
        }
    }else{
        document.forma.municipio_docum_id.length = 1;
        document.forma.municipio_docum_id.options[0].value = "1";
        document.forma.municipio_docum_id.options[0].text = "NO APLICA";
    }
    document.forma.municipio_docum_id.options[0].selected = true;
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
    doc1(document.getElementById('prm_militar_id').value);
    doc2(document.getElementById('prm_etnia_id').value);
    doc3(document.getElementById('prm_sexo_id').value);
    calcularEdad(document.getElementById('nacimiento').value);
}
window.onload=carga;
</script>