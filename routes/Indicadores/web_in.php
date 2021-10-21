<?php

$routexxx = 'indimodu';
$controll = "Indicadores\\" . ucfirst($routexxx) . "Controller@";
Route::group(['prefix' => 'indicadores'], function () use ($routexxx, $controll) { //pruebas vero
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);
    require_once('Administ/web_administ.php');
});





// require_once('Admin/web_indimodu.php');
// require_once('web_accion_gestion.php');
// require_once('web_area.php');
// require_once('web_diagnostico.php');
// require_once('web_actividad_ok.php');
// require_once('web_in_act_fuente_ok.php');
// require_once('web_grupales.php');
// //  require_once('web_doc_indicador.php');
// require_once('web_individuales.php');
// require_once('web_pregunta.php');
// // require_once('web_respuesta.php');
// require_once('web_validacion.php');
// require_once('web_valoracion_ok.php');
// require_once('web_valoracion.php');
