<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Core\Nasabah\Controllers\Web')
->prefix('admin')
->name('admin.')
->middleware(['web', 'splade'])
->group(function () {
    #*** Ex: START: Nasabah ***#
    Route::middleware('auth')->group(function () {
        Route::resource('nasabah', 'NasabahController');
    });
    #*** END: Nasabah ***#
});
