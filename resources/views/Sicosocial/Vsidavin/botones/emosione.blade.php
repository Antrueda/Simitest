<table >


    @foreach(Tr::getEmociones(['vsiidxxx'=>$queryxxx->id]) as $dataxxxx)
      <tr>
        <td style="font-size: 10px;">{{ $dataxxxx->nombre}}</td>
      </tr>
      @endforeach

  </table>


