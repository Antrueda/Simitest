<script>
  var eps0 =[
    @foreach($eps0 as $k => $d)
      [{{$k}}, "{{ $d }}"],
    @endforeach
  ];
  var eps1 =[
    @foreach($eps1 as $k => $d)
      [{{$k}}, "{{ $d }}"],
    @endforeach
  ];
  var eps2 =[
    @foreach($eps2 as $k => $d)
      [{{$k}}, "{{ $d }}"],
    @endforeach
  ];
  var civil =[
    @foreach($estadoCivil as $k => $d)
      [{{$k}}, "{{ $d }}"],
    @endforeach
  ];
  var civilMenor =[
    @foreach($estadoCivil as $k => $d)
      @if($k == 153)
        [{{$k}}, "{{ $d }}"],
      @endif
    @endforeach
  ];
  function doc(valor) {
    if (valor == 227) {
      document.getElementById("prm_cual_id").hidden=false;
    } else {
      document.getElementById("prm_cual_id").hidden=true;
    }
  }

  function doc1(valor) {
    if (valor == 157) {
      document.getElementById("prm_cualGrupo_id").hidden=false;
    } else {
      document.getElementById("prm_cualGrupo_id").hidden=true;
    }
  }

  function doc2(valor) {
    if (valor == 168) {
      document.getElementById("prm_cualeps_id").hidden=true;
    } else {
      document.getElementById("prm_cualeps_id").hidden=false;
    }
    if (valor == 165 || valor == 166){
      eps=eval("eps0");
      numero = eps.length;
      document.forma.prm_cualeps_id.length = numero;
      for(i=0;i<numero;i++){
        document.forma.prm_cualeps_id.options[i].value=eps[i][0];
        document.forma.prm_cualeps_id.options[i].text=eps[i][1];
      }
    }
    if (valor == 167){
      eps=eval("eps1");
      numero = eps.length;
      document.forma.prm_cualeps_id.length = numero;
      for(i=0;i<numero;i++){
        document.forma.prm_cualeps_id.options[i].value=eps[i][0];
        document.forma.prm_cualeps_id.options[i].text=eps[i][1];
      }
    }
    if (valor == 1631){
      eps=eval("eps2");
      numero = eps.length;
      document.forma.prm_cualeps_id.length = numero;
      for(i=0;i<numero;i++){
        document.forma.prm_cualeps_id.options[i].value=eps[i][0];
        document.forma.prm_cualeps_id.options[i].text=eps[i][1];
      }
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
    if(edad>14){
      eps=eval("civil");
      numero = eps.length;
      document.forma.prm_estadoivil_id.length = numero;
      for(i=0;i<numero;i++){
        document.forma.prm_estadoivil_id.options[i].value=eps[i][0];
        document.forma.prm_estadoivil_id.options[i].text=eps[i][1];
      }
      document.getElementById("prm_estadoivil_id").value=undefined;
      document.getElementById("prm_genero_id").value='';
      document.getElementById("prm_genero_id").hidden=false;
      document.getElementById("prm_sexual_id").value='';
      document.getElementById("prm_sexual_id").hidden=false;
    } else {
      eps=eval("civilMenor");
      numero = eps.length;
      document.forma.prm_estadoivil_id.length = numero;
      for(i=0;i<numero;i++){
        document.forma.prm_estadoivil_id.options[i].value=eps[i][0];
        document.forma.prm_estadoivil_id.options[i].text=eps[i][1];
      }
      document.getElementById("prm_estadoivil_id").value=153;
      document.getElementById("prm_genero_id").value='';
      document.getElementById("prm_genero_id").hidden=true;
      document.getElementById("prm_sexual_id").value='';
      document.getElementById("prm_sexual_id").hidden=true;
    }
}
  function carga() {
    doc(document.getElementById('prm_discapacidad_id').value);
    doc1(document.getElementById('prm_grupo_etnico_id').value);
    doc2(document.getElementById('prm_regimen_id').value);
    calcularEdad(document.getElementById('nacimiento').value);
  }

  window.onload = carga;

</script>