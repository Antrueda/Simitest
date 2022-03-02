


  <table width='100%' >
    @foreach(Tr::getResponsableTalleres(['padrexxx'=>$queryxxx->id]) as $dataxxxx)
      <tr>
        <td style="font-size: 15px;">{{ $dataxxxx }}</td>
        
      </tr>
      
      @endforeach

  </table>