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

Route::get('/', function () {
  return view('welcome');
})->name('/');

Route::group(['middleware' => ['guest']], function () {
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@Login');
});

Route::group(['middleware' => ['auth']], function () {
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');
  include_once('Seguridad/web_rol.php');
  include_once('Seguridad/web_usuario.php');
  include_once('Administracion/web_admin.php');
  include_once('Seguridad/web_permiso.php');
  include_once('Fichaingreso/web_fichaingreso.php');
  include_once('Sicosocial/web_vsi.php');
  include_once('Domicilio/web_csd.php');
  include_once('Fichaingreso/web_fi.php');
  include_once('Intervencion/web_is.php');
  include_once('Fichaobservacion/web_fos.php');
  include_once('Acciones/web_acciones.php');
  include_once('webs/excel/web_excel.php');
  include_once('ajaxx.php');
  include_once('Indicadores/web_in.php');
});
