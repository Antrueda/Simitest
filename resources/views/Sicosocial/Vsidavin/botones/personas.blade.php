<table>

    @foreach(Tr::getPersonas(['vsiidxxx'=>$queryxxx->vsi_id]) as $dataxxxx)
    <tr>
        <td style="font-size: 10px;">{{ $dataxxxx->nombre}}</td>
    </tr>
    @endforeach
</table>
