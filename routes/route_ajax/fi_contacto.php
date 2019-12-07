<?php
Route::post('tipocontacto', [
    'uses' => 'AjaxxController@tipocontacto',
])->name('ajaxx.tipocontacto');