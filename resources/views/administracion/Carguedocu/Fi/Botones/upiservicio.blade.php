

<table width='100%' >
  @foreach(Tr::getUpi(['padrexxx'=>$queryxxx->sis_nnaj_id]) as $dataxxxx)
    <tr>
      <td style="font-size: 15px;">ddddd{{ $dataxxxx }}</td>
      <td style="font-size: 15px;">
        <table width='100%' >
          @foreach ($dataxxxx->servicio as $item)
          <tr>
            <td style="font-size: 15px;">
              {{ $item->s_servicio }}
            </td>
          </tr>
          @endforeach
        </table>
      </td>
    </tr>
    
  @endforeach

  
</table>





{{-- pruebe --}}
