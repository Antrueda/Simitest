
<table width='100%' >
  @foreach(Tr::getUpi(['padrexxx'=>$queryxxx->id]) as $dataxxxx)
    <tr>
      <td style="font-size: 15px;">{{$dataxxxx['upixxxxx']->nombre}}</td>
      <td style="font-size: 15px;">ORIGEN: {{$dataxxxx['upixxxxx']->principal}}</td>
      <td style="font-size: 15px;">
        <table width='100%' >
          @foreach($dataxxxx['servicio'] as $servicio)
          <tr>
            <td style="font-size: 15px;">{{$servicio->s_servicio}}</td>
          </tr> 
        @endforeach
        </table>
      </td>
    </tr>
    
  @endforeach

</table>