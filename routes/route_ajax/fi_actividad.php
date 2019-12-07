<?php
Route::post('practicareligion', [
    'uses' => 'AjaxxController@practicareligion',
])->name('ajaxx.practicareligion');
Route::post('cualsacramento', [
    'uses' => 'AjaxxController@cualsacramento',
])->name('ajaxx.cualsacramento');