<?php

use App\Http\Controllers\Users\UserEdit;
use App\Http\Controllers\Users\UserUpdate;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // edit
    Route::get('users/{user}/edit')
        ->uses(UserEdit::class)
        ->name('users.edit');

    // update
    Route::patch('users/{user}/update')
        ->uses(UserUpdate::class)
        ->name('users.update');
});

/**-----------------------------------------------------------
 * Auth routes
 * -----------------------------------------------------------
 */
require __DIR__ . '/auth.php';
