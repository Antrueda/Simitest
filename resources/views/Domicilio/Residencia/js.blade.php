<script>
var localidad =[
    @foreach($localidadjs as $d)
        @if($d->id > 1)
            [{{$d->id}}, "{{ $d->s_localidad }}"],
        @endif
    @endforeach
];
@foreach($localidadjs as $d)
    var loca_{{ $d->id }}=[
        @foreach($d->upzs as $e)
            [{{$e->id}}, "{{ $e->codigoNombre }}"],
        @endforeach
    ];
@endforeach
@foreach($localidadjs as $d)
    @foreach($d->upzs as $e)
        var upz_{{ $e->id }}=[
            @foreach($e->sis_barrios as $f)
                [{{$f->id}}, "{{ $f->s_barrio }}"],
            @endforeach
        ];
    @endforeach
@endforeach
$(document).ready(function(){
    $('#ambientes').select2({
        language: "es"
    });
});
function cambiaLocalidad(localidad){
    if (localidad !== '') {
        mi_valor=eval("loca_" + localidad);
        num_valor = mi_valor.length;
        document.forma.sis_upz_id.length = num_valor;
        for(i=0;i<num_valor;i++){
            document.forma.sis_upz_id.options[i].value=mi_valor[i][0];
            document.forma.sis_upz_id.options[i].text=mi_valor[i][1];
        }
    }else{
        document.forma.sis_upz_id.length = 1;
        document.forma.sis_upz_id.options[0].value = "";
        document.forma.sis_upz_id.options[0].text = "NO APLICA";
    }
    document.forma.sis_upz_id.options[0].selected = true;
    cambiaUpz(document.forma.sis_upz_id.options[0].value);
}
function cambiaUpz(upz){
    if (upz !== '') {
        mi_valor=eval("upz_" + upz);
        num_valor = mi_valor.length;
        if(num_valor > 0){
            document.forma.sis_barrio_id.length = num_valor;
            for(i=0;i<num_valor;i++){
                document.forma.sis_barrio_id.options[i].value=mi_valor[i][0];
                document.forma.sis_barrio_id.options[i].text=mi_valor[i][1];
            }
        }else{
            document.forma.sis_barrio_id.length = 1;
            document.forma.sis_barrio_id.options[0].value = "";
            document.forma.sis_barrio_id.options[0].text = "";
        }
    }else{
        document.forma.sis_barrio_id.length = 1;
        document.forma.sis_barrio_id.options[0].value = "";
        document.forma.sis_barrio_id.options[0].text = "";
    }
    document.forma.sis_barrio_id.options[0].selected = true;
}
function doc(valor){
    // Urbana
    if(valor == 287){
        document.getElementById("prm_dir_via_id").hidden=false;
        document.getElementById("dir_nombre").hidden=false;
        document.getElementById("prm_dir_alfavp_id").hidden=false;
        document.getElementById("prm_dir_bis_id").hidden=false;
        document.getElementById("prm_dir_alfabis_id").hidden=false;
        document.getElementById("prm_dir_cuadrantevp_id").hidden=false;
        document.getElementById("dir_generadora").hidden=false;
        document.getElementById("prm_dir_alfavg_id").hidden=false;
        document.getElementById("dir_placa").hidden=false;
        document.getElementById("prm_dir_cuadrantevg_id").hidden=false;
        document.getElementById("prm_estrato_id").hidden=false;
        document.getElementById("dir_complemento").hidden=false;
    }
    // Rural
    if(valor == 288){
        document.getElementById("prm_dir_via_id").hidden=true;
        document.getElementById("dir_nombre").hidden=true;
        document.getElementById("prm_dir_alfavp_id").hidden=true;
        document.getElementById("prm_dir_bis_id").hidden=true;
        document.getElementById("prm_dir_alfabis_id").hidden=true;
        document.getElementById("prm_dir_cuadrantevp_id").hidden=true;
        document.getElementById("dir_generadora").hidden=true;
        document.getElementById("prm_dir_alfavg_id").hidden=true;
        document.getElementById("dir_placa").hidden=true;
        document.getElementById("prm_dir_cuadrantevg_id").hidden=true;
        document.getElementById("prm_estrato_id").hidden=true;
        document.getElementById("dir_complemento").hidden=false;
    }
    if(valor == 289){
        document.getElementById("prm_dir_via_id").hidden=true;
        document.getElementById("dir_nombre").hidden=true;
        document.getElementById("prm_dir_alfavp_id").hidden=true;
        document.getElementById("prm_dir_bis_id").hidden=true;
        document.getElementById("prm_dir_alfabis_id").hidden=true;
        document.getElementById("prm_dir_cuadrantevp_id").hidden=true;
        document.getElementById("dir_generadora").hidden=true;
        document.getElementById("prm_dir_alfavg_id").hidden=true;
        document.getElementById("dir_placa").hidden=true;
        document.getElementById("prm_dir_cuadrantevg_id").hidden=true;
        document.getElementById("prm_estrato_id").hidden=true;
        document.getElementById("dir_complemento").hidden=true;
    }
}
function carga() {
	doc(document.getElementById('prm_dir_zona_id').value);
}
window.onload=carga;
</script>