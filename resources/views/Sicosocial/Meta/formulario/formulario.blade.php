<?php

$tablaxxx = 'principa';
if (isset($todoxxxx['rowscols'])) {
    $tablaxxx = $todoxxxx['rowscols'];
}

?>

<div class="row">
    <div class="col-md-12">
        <h6><b>18. Potencialidades y metas</b></h6>
    </div>
</div>
@foreach ($todoxxxx['tablasxx'] as $key=> $tablasxx)
<div class="row">
                    <div class="col-md-12">
                        <h6>{{$tablasxx['relacion']}}</h6>
                    </div>
                </div>
@component('layouts.components.tablajquery.'.$tablaxxx, ['todoxxxx'=>$tablasxx])
@slot('tableName')
{{$tablasxx['tablaxxx'] }}
@endslot
@slot('class')
@endslot
@endcomponent
@endforeach
