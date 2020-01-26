<?php 
Route::group(['prefix' => 'tema'], function () {
    Route::get('tooltips', [
	    'uses' => 'Tooltips\TooltipsController@getTooltips',
	])->name('tooltips');
	
});