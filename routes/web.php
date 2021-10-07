<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperworkPhase1Controller;
use App\Http\Controllers\PaperworkPhase2Controller;

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

Route::redirect('/', '/kertas-kerja/fasa-1');

// Basic authentication
Route::get('/login', [ AuthenticatedSessionController::class, 'create' ]);
Route::post('/authenticate', [ AuthenticatedSessionController::class, 'store' ]);
Route::post('/logout', [ AuthenticatedSessionController::class, 'destroy' ]);

// Route::get('/register');

Route::prefix('/kertas-kerja/fasa-1')->name('paperwork.phase-1.')->group(function () {
    Route::get('/',                   [ PaperworkPhase1Controller::class, 'index' ]);
    Route::get('/permohonan',         [ PaperworkPhase1Controller::class, 'create' ]);
    Route::post('/',                  [ PaperworkPhase1Controller::class, 'store' ]);
    Route::get('/semakan/{id}',       [ PaperworkPhase1Controller::class, 'show' ]);
    Route::get('/semakan/{id}/cetak', [ PaperworkPhase1Controller::class, 'print' ]);
    Route::put('/{id}',               [ PaperworkPhase1Controller::class, 'update' ]);
    Route::delete('/{id}',            [ PaperworkPhase1Controller::class, 'destroy' ]);
});

Route::prefix('/kertas-kerja/fasa-2/kelulusan')->name('paperwork.phase-2.')->group(function () {
    Route::get('/',                     [ PaperworkPhase2Controller::class, 'index' ]);
    Route::get('/{id}',                 [ PaperworkPhase2Controller::class, 'show' ]);
    Route::put('/{id}/hantar-semula',   [ PaperworkPhase2Controller::class, 'update' ]);
    Route::get('/{id}/cetak',           [ PaperworkPhase2Controller::class, 'print' ]);
});
