<?php

$tablaxxx='principa';
if(isset($todoxxxx['rowscols'])){
    $tablaxxx=$todoxxxx['rowscols'];
}


?>

@foreach ($todoxxxx['tablasxx'] as $tablasxx)

  @component('Administracion.Acomponents.tablajquery.'.$tablaxxx, ['todoxxxx'=>$tablasxx])
    @slot('tableName')
    {{$tablasxx['tablaxxx'] }}
    @endslot
    @slot('class')
    @endslot
  @endcomponent
@endforeach
