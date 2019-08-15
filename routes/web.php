<?php

Route::group(['middleware'=>['web'], 'namespace' => 'LucasQuinnGuru\SitetronicCore\Controllers'], function () {
    Route::prefix('admin')->group(function () {
        Route::resource('core', 'AdminController');

    });

});
