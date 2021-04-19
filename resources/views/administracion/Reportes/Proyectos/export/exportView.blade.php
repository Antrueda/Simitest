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
                    [$table, $column] = explode('-', $key);
                @endphp
                @if ($table === 'maintabl')
                    <th>{{ $data->$column }}</th>
                @else
                    <th>{{ $data->$table->$column }}</th>
                @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
