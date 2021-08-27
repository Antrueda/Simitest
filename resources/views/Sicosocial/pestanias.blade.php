<?php
$pestania='Sicosocial.Acomponentes.Acrud.pestanias';
if (isset($todoxxxx['pestania'])) {
    $pestania=$todoxxxx['pestania'];
}

if(!isset($todoxxxx["rutaboto"])){
    $pestania='layouts.components.pestanias.pestanias';
}



?>
@component($pestania,['todoxxxx'=>$todoxxxx])
@endcomponent

