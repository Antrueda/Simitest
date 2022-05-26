<table >
    @foreach(Tr::getUnidad(['padrexxx'=>$queryxxx->id]) as $dataxxxx)
      <tr>
        <td style="font-size: 10px;">{{ $dataxxxx->s_denominas}}</td>
      </tr>
      @endforeach

  </table>


