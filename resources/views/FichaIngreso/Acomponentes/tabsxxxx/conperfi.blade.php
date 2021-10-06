<?php
$tabsxxxx = 'tabsxxxx';
if (isset($todoxxxx["tabsxxxx"])) {
    $tabsxxxx = $todoxxxx["tabsxxxx"];
}
?>
<div class="col-md-3">
    {{-- ventanas --}}
    @include($todoxxxx["rutacarp"].'Acomponentes.tabsxxxx.perfilxx')
    {{-- ventanas --}}
</div>
<div class="col-md-9">
    {{-- ventanas --}}
    @include($todoxxxx["rutacarp"].'Acomponentes.tabsxxxx.'.$tabsxxxx)
    {{-- ventanas --}}
</div>
