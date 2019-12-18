<?php
Route::get('getDepartamentosMunicipios', [
    'uses' => 'AjaxxController@getDepartamentosMunicipios',
])->name('ajaxx.getDepartamentosMunicipios');
