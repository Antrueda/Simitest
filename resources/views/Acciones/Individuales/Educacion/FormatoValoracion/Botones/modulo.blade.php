<table >
    @foreach(Tr::getModulos(['padrexxx'=>$queryxxx->id]) as $dataxxxx)
      <tr>
        <td style="font-size: 10px;">{{ $dataxxxx->s_modulo}}</td>
      </tr>
      @endforeach

  </table>


