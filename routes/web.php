<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\User;


Route::get('/', function () {
    User::where('sis_esta_id', 1)->whereDate('d_finvinculacion', '<', date('Y-m-d', time()))
        ->update(
            [
                'sis_esta_id' => 2,
                'estusuario_id' => 2,
            ]
        );
    //    return redirect()->route('contrase.cambiar',[1]);
       // return route('contrase.cambiar',[1]);
    return view('welcome');
})->name('/');

Route::group(['middleware' => ['guest']], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@Login');
    Route::get('cambio', 'Auth\LoginController@getCambio')->name('login.cambio');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('post', 'PostController');
});

Route::get('markAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');
Route::post('/mark-as-read', 'AlertaController@markNotification')->name('markNotification');


Route::group(['middleware' => ['auth', 'ChangePasswor','acuerdo']], function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('cambio', [
        'middleware' => 'ChangePasswor',
        'uses' => 'Auth\LoginController@getCambio'
    ]);

    Route::group(['middleware' => ['auth','PoliticaDatosMiddleware']], function () {

        Route::get('usuario/acuerdo/{objetoxx}', [
            'uses' => 'Seguridad\Usuario\AcuerdoController@edit',
            'middleware' => 'PoliticaDatosMiddleware'
        ])->name('acuerdo.cambiar');
    });

    include_once('Seguridad/web_rol.php');
    include_once('Seguridad/web_usuario.php');
    include_once('Administracion/web_admin.php');
    include_once('Seguridad/web_permiso.php');
    include_once('Fichaingreso/web_fichaingreso.php');
    include_once('Sicosocial/web_nnajsvsi.php');
    include_once('Domicilio/web_csd.php');
    include_once('Fichaingreso/web_fi.php');
    include_once('Intervencion/web_is.php');
    include_once('Fichaobservacion/web_fos.php');
    include_once('Acciones/web_acciones.php');
    include_once('webs/excel/web_excel.php');
    include_once('ajaxx.php');
    include_once('Indicadores/web_in.php');
    include_once('Fosadmin/web_modulo.php');
});
