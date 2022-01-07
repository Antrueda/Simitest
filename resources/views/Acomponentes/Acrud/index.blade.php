
@foreach ($todoxxxx['tablasxx'] as $tablasxx)
@component($tablasxx["archdttb"], ['todoxxxx'=>$tablasxx])
    @slot('tableName')
    {{$tablasxx['tablaxxx'] }}
    @endslot
    @slot('class')
    @endslot
  @endcomponent
@endforeach

@foreach($todoxxxx['modalsxx'] as $modalxxx)
@include($modalxxx)

@endforeach
