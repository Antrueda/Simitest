<?php
$rutaperf = $todoxxxx["rutacomp"] . 'tabsxxxx.perfilxx';
$rutabxxx = $todoxxxx["rutacomp"] . 'tabsxxxx.tabsxxxx';
if (isset($todoxxxx["rutaperf"])) {
    $rutaperf = $todoxxxx["rutaperf"];
}
if (isset($todoxxxx["rutabxxx"])) {
    $rutabxxx = $todoxxxx["rutabxxx"];
}
?>
<div class="col-md-3">
    {{-- ventanas --}}
    @include($rutaperf)
    {{-- ventanas --}}
</div>
<div class="col-md-9">
    {{-- ventanas --}}

    @include($rutabxxx)
    {{-- ventanas --}}
</div>
