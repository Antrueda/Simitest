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

use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use App\Models\Permissionext;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

route::get('/cache', function () {
    Artisan::call('view:cache');
    Artisan::call('route:cache');
    return 'exito';
});
route::get('/pruebasjose', function () {
    // $asddiari = AsdDiaria::join('sis_depens', 'asd_diarias.sis_depen_id', '=', 'sis_depens.id')

    //     ->join('sis_upzbarris', 'sis_depens.sis_upzbarri_id', '=', 'sis_upzbarris.id')
    //     ->where('prm_lugactiv_id', '2762')
    //     ->groupBy('asd_diarias.sis_depen_id', 'sis_upzbarris.sis_localupz_id', 'sis_depens.sis_upzbarri_id')
    //     ->get(['asd_diarias.sis_depen_id', 'sis_depens.sis_upzbarri_id', 'sis_upzbarris.sis_localupz_id']);
    // foreach ($asddiari as $key => $value) {
    //     AsdDiaria::where('sis_depen_id', $value->sis_depen_id)->update(['sis_localupz_id' => $value->sis_localupz_id, 'sis_upzbarri_id' => $value->sis_upzbarri_id]);
    //     // echo $value->sis_depen_id.' '.$value->sis_localupz_id.' '.$value->sis_upzbarri_id.'<br>';
    // }

    
});

route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return 'exito';
});



route::get('/crearpermisos', function () {

    return 'exito';
});

Route::get('/', function () {
    // fecha de inactivacion del usuario, se le suma un día para que le permita el acceso el último día
    $fechinac = Carbon::now()->addDay()->format('Y-m-d');
    // if (Carbon::now()->gt($fechinac)) {
    User::where('sis_esta_id', 1)->whereDate('d_finvinculacion', '<', $fechinac)
        // ->update(
        //     [
        //         'sis_esta_id' => 2,
        //         'estusuario_id' => 2,
        //         'polidato_at' => null,
        //     ]
        // );
    ;
    // }
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


Route::group(['middleware' => ['auth', 'ChangePasswor', 'chequear.vinculacion']], function () {
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('cambio', [
        'middleware' => 'ChangePasswor',
        'uses' => 'Auth\LoginController@getCambio'
    ]);

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
    include_once('Ayudline/web_moduloxx.php');

    include_once('Reportes/web_reportex.php');
    //include_once('Ejemplo/web_ejemodu.php'); // rout ejemplo para cuando se realizan nuevos desarrollos
    /**
     * Rutas del módulo de ayuda
     */
    Route::middleware(['role:SUPER-ADMINISTRADOR|ADMINISTRADOR'])->group(function () {
        Route::resource('ayuda', 'Ayuda\\Administracion\\AyudaAdminController', ['except' => ['show', 'destroy']]);
        Route::get('ayuda/change/{value}', 'Ayuda\\Administracion\\AyudaAdminController@change')->name('ayuda.change');

        Route::prefix('intadmin')->middleware(['role:SUPER-ADMINISTRADOR|ADMINISTRADOR'])->group(function () {
            Route::resource('tipoatencion',  'Administracion\\Intervencion\\TipoAtencionController');
            Route::resource('{atencion}/intarea',  'Administracion\\Intervencion\\AreaAjusteController', ['names' => 'intarea']);
            Route::resource('{area}/intsubarea',  'Administracion\\Intervencion\\SubareaAjusteController');
            Route::resource('paramarea',  'Administracion\\Intervencion\\IntAreaAjusteController');
            Route::resource('paramsubarea',  'Administracion\\Intervencion\\IntSubareaAjusteController');
        });
    });
    include_once('AdmiActi/web_adacmodu.php');
    include_once('AdmiActiAsd/web_adacmoduasd.php');
    include_once('Actaencu/web_actamodu.php');
    include_once('Actenadm/web_actenadm.php');
    include_once('Direccionamiento/web_direcmodu.php');
    include_once('Interfaz/web_interfaz.php');
});


// Route::prefix('soporte')->group(function () {
//     Route::get('ayuda', 'Ayuda\\Vista\\AyudaController@index')->name('ayuda.vista.index');
//     Route::get('ayuda/todo', 'Ayuda\\Vista\\AyudaController@showAll')->name('ayuda.vista.todo');
//     Route::get('ayuda/{slug}', 'Ayuda\\Vista\\AyudaController@slugfind')->name('ayuda.vista.slug');
//     Route::post('ayuda', 'Ayuda\\Vista\\AyudaController@finder')->name('ayuda.vista.buscar');
//     Route::get('ayuda/buscar/{value}', 'Ayuda\\Vista\\AyudaController@buscador')->name('ayuda.vista.buscando');
// });
