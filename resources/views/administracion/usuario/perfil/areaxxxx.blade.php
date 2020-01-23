@slot('areasxxx') {{--slot roles --}}
    @foreach ($todoxxxx['tablasxx'] as $tablasxx)
        @component('layouts.components.tablajquery.generalx', ['todoxxxx'=>$tablasxx])
            @slot('tableName')
            {{ $tablasxx['tablenax'] }}
            @endslot
            @slot('class')
            @endslot
        @endcomponent   
    @endforeach
      


@endslot