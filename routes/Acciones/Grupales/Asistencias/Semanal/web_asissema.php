<?php
$routexxx = 'asissema';
$controll = 'Acciones\Grupales\Asistencias\Semanal\AsisSemaController@';
Route::group(['prefix' => 'asissema'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.listaxxx');
    Route::get('{padrexxx}/listnnaj', [
        'uses' => $controll . 'getListaNnajsAsignados',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|' . $routexxx . '-activarx']
    ])->name($routexxx . '.listnnaj');
    Route::get('{padrexxx}/nnajsele', [
        'uses' => $controll . 'getListaNnajsSelected',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|' . $routexxx . '-activarx']
    ])->name($routexxx . '.nnajsele');
    Route::post('{padrexxx}/asignar', [
        'uses' => $controll . 'setAsignar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|' . $routexxx . '-activarx']
    ])->name($routexxx . '.asignarx');
    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');
    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.verxxxxx');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::get('asissema/getServicios', [
        'uses' => $controll . 'getServiciosUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.servicio');
    Route::get('asissema/responsable', [
        'uses' => $controll . 'getResponsableUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.responsa');
    Route::get('asissema/grado', [
        'uses' => $controll . 'getGrado',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.grado');
    Route::get('asissema/grupo', [
        'uses' => $controll . 'getGrupo',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.grupo');
    Route::get('asissema/actividad', [
        'uses' => $controll . 'getActividad',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.actividad');
    Route::get('asissema/curso', [
        'uses' => $controll . 'getCurso',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.curso');
    Route::get('asissema/contrati', [
        'uses' => $controll . 'getContratistaUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.contrati');

    Route::delete('asissema/{asismatricula}/desvincularmatricula', [
        'uses' => $controll . 'setDesvincularMatricula',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.desvincular');

    Route::post('asissema/{modeloxx}/asignarmatricula', [
        'uses' => $controll . 'setAsignarMatricula',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.asignarmatricula');

    //get ajax fecha puede cargar
    Route::get('asistencias/fechapuede', [
        'uses' => $controll . 'getFechaPuede',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.fechapuede');

    //planilla asistencia semanal - asistencias
    Route::get('asistencias/{modeloxx}', [
        'uses' => $controll . 'asistencias',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.asistencias');

    Route::get('asistencias/ver/{modeloxx}', [
        'uses' => $controll . 'verasistencias',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.verasistencia');

    //cambiar estado asitencia ajax
    Route::post('asistencias/cambiarestado', [
        'uses' => $controll . 'setEstadoAsistencia',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.estadoasis');
});
