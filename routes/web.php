<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PaperworkReceiverController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This route is for e-paperwork ptj route, this route is important for determining properties for each paperwork,
| 1) Route title, date_from, date_until & details obtain from page route::/permohonan Halaman hadapan, its function including view title, tentative & details from the front page to page route:/, this title will be inserted by PTJ.
| 2) Route status is taken when kk got accepted by unit latihan(Kerani) & will be reviewed in the meeting by pegawai 1, the result will be informed in route:/kertas-kerja, status pending/reject/approved came from route:/kertas-kerja/<id>
|
|
*/

Route::redirect('/', '/ciptaan/kertas-kerja');

// Basic authentication
Route::get('/login', [ AuthenticatedSessionController::class, 'create' ])->name('login');
Route::post('/authenticate', [ AuthenticatedSessionController::class, 'store' ])->name('authenticate');
Route::get('/logout', [ AuthenticatedSessionController::class, 'destroy' ])->name('logout');

Route::get('/error', fn() => 'Whoops an error occured');

Route::prefix('ciptaan/kertas-kerja')
    ->middleware(['auth', 'role:creator'])
    ->name('paperwork.creation.')
    ->group(function() {
        Route::resource('', PaperworkReceiverController::class)
            ->only(['index', 'show', 'create', 'store', 'destroy']);
});

// TODO: Continue this pattern for other 'role types' as well.

// TODO: Design routes and it's controller for the 'supporter' feature
