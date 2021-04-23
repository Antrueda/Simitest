<table>
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($collection as $data)
            <tr>
                @foreach ($headers as $key => $header)
                    @php
                        $valueArray = explode('-', $key);
                        if(count($valueArray) > 1){
                            foreach ($valueArray as $value) {
                                $data = $data->$value
                            }
                        } else {
                            $data = $data->$key
                        }
                    @endphp
                    <th>{{ $data }}</th>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
