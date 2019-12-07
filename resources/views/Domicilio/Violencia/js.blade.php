<script>
@foreach($depajs as $d)
    var depa_{{ $d->id }}=[
        @foreach($d->sis_municipios as $m)
            [{{$m->id}}, "{{ $m->s_municipio }}"],
        @endforeach
    ];
@endforeach
function doc(valor){
	if(valor == 450 || valor == 451 || valor == 452 || valor == 936 || valor == 454){
		document.getElementById("departamento_cond_id").hidden=false;
        document.getElementById("municipio_cond_id").hidden=false;
        document.getElementById("prm_certificado_id").hidden=false;
        
	} else {
		document.getElementById("departamento_cond_id").hidden=true;
        document.getElementById("municipio_cond_id").hidden=true;
        document.getElementById("prm_certificado_id").hidden=true;
        doc1(document.getElementById('prm_certificado_id').value=228);
	}
}
function doc1(valor){
    if(valor == 227){
        document.getElementById("departamento_cert_id").hidden=false;
        document.getElementById("municipio_cert_id").hidden=false;
    } else {
        document.getElementById("departamento_cert_id").hidden=true;
        document.getElementById("municipio_cert_id").hidden=true;
    }
}
function cambiaDepartamento(departamento){
    if (departamento !== '') {
        mi_ciudad=eval("depa_" + departamento);
        num_ciudad = mi_ciudad.length;
        document.forma.municipio_cond_id.length = num_ciudad;
        for(i=0;i<num_ciudad;i++){
            document.forma.municipio_cond_id.options[i].value=mi_ciudad[i][0];
            document.forma.municipio_cond_id.options[i].text=mi_ciudad[i][1];
        }
    }else{
        document.forma.municipio_cond_id.length = 1;
        document.forma.municipio_cond_id.options[0].value = "1";
        document.forma.municipio_cond_id.options[0].text = "NO APLICA";
    }
    document.forma.municipio_cond_id.options[0].selected = true;
}
function cambiaDepartamento1(departamento){
    if (departamento !== '') {
        mi_ciudad=eval("depa_" + departamento);
        num_ciudad = mi_ciudad.length;
        document.forma.municipio_cert_id.length = num_ciudad;
        for(i=0;i<num_ciudad;i++){
            document.forma.municipio_cert_id.options[i].value=mi_ciudad[i][0];
            document.forma.municipio_cert_id.options[i].text=mi_ciudad[i][1];
        }
    }else{
        document.forma.municipio_cert_id.length = 1;
        document.forma.municipio_cert_id.options[0].value = "1";
        document.forma.municipio_cert_id.options[0].text = "NO APLICA";
    }
    document.forma.municipio_cert_id.options[0].selected = true;
}
function carga() {
	doc(document.getElementById('prm_condicion_id').value);
    doc1(document.getElementById('prm_certificado_id').value);
}
window.onload=carga;
</script>