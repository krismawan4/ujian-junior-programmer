<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::namespace('Core\Nasabah\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** Ex: START: Nasabah ***#
        // Route::apiResource('nasabahs', 'NasabahController');
        #*** END: Nasabah ***#
    });
});
