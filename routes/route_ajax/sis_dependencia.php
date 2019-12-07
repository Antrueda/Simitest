<?php
Route::get('sisservicio', [
    'uses' => 'AjaxxController@sisservicio',
])->name('ajaxx.sisservicio');

Route::get('personal', [
    'uses' => 'AjaxxController@personal',
])->name('ajaxx.personal');