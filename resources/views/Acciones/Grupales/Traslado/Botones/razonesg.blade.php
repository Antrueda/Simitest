

  <table width='100%' >
    @foreach(Tr::getRazonesGrupales(['padrexxx'=>$queryxxx->id]) as $dataxxxx)
      <tr>
        <td style="font-size: 15px;">{{ $dataxxxx[0] }}</td>
        <td style="font-size: 15px;">{{ $dataxxxx[1] }}</td>
      </tr>
      
      @endforeach

  </table>


