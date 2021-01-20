

  <table >
    @foreach(Tr::getRazonesGrupales(['padrexxx'=>$queryxxx->id]) as $dataxxxx)
      <tr>
        <td style="font-size: 10px;">{{ $dataxxxx->nombre}}</td>
      </tr>
      @endforeach

  </table>


