
@foreach ($todoxxxx['tablazxx'] as $tablazxx)
@component($tablazxx["archdttb"], ['todoxxxx'=>$tablazxx])
    @slot('tableName')
    {{$tablazxx['tablaxxx'] }}
    @endslot
    @slot('class')
    @endslot
  @endcomponent
@endforeach
