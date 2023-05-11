<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    // V1
    Route::namespace('Core\Answer\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        //*** Ex: START: Answer ***#
        // Route::apiResource('answers', 'AnswerController');
        //*** END: Answer ***#
    });
});
