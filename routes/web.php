<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PaperworkValidationController;
use App\Http\Controllers\PaperworkCreationController;
use App\Http\Controllers\PaperworkSupportController;
use App\Http\Controllers\PaperworkAcceptanceController;
use Illuminate\Support\Facades\Auth;
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

// eprogram.com/ciptaan/kertas-kerja

// TODO: Design root route to redirect specific users to specific routes based on their roles

Route::get('/', function() {
    // If guest
    if (Auth::guest())
        return redirect()->route('login');

    // If admin
    if (Auth::user()->roleType->name == 'admin')
        return redirect()->route('paperwork.acceptance.index');

    // Else standard user
    // Generate the route name
    $route_name =
        "paperwork." .
        [
            // Role => Action
            // TODO Implement getter 'roleType->action' in user model
            'creator' => 'creation',
            'supporter' => 'support',
            'validator' => 'validation',
            'acceptor' => 'acceptance',
        ][auth()->user()->roleType->name] .
        '.index';

    return redirect()->route($route_name);
});

// Basic authentication
Route::get('/login', [ AuthenticatedSessionController::class, 'create' ])->name('login');
Route::post('/authenticate', [ AuthenticatedSessionController::class, 'store' ])->name('authenticate');
Route::post('/logout', [ AuthenticatedSessionController::class, 'destroy' ])->name('logout');

Route::get('/error', fn() => 'Whoops an error occured');

// Creator Routes
Route::prefix('ciptaan/kertas-kerja')
    ->middleware(['auth', 'role:creator'])
    ->name('paperwork.creation.')
    ->group(function() {
        Route::resource('', PaperworkCreationController::class)
            ->only(['index', 'show', 'create', 'store', 'destroy']);
    });

// Supporter Routes
Route::prefix('sokongan/kertas-kerja')
    ->middleware(['auth', 'role:supporter'])
    ->name('paperwork.support.')
    ->group(function() {
        Route::resource('', PaperworkSupportController::class)
            ->only(['index', 'show', 'create', 'store', 'destroy']);
    });

// Validator Routes
Route::prefix('pengesahan/kertas-kerja')
    ->middleware(['auth', 'role:validator'])
    ->name('paperwork.validation.')
    ->group(function() {
        Route::resource('', PaperworkValidationController::class)
            ->only(['index', 'show', 'create', 'store', 'destroy']);
    });

// Acceptor Routes
Route::prefix('penerimaan/kertas-kerja')
    ->middleware(['auth', 'role:acceptor'])
    ->name('paperwork.acceptance.')
    ->group(function() {
        Route::resource('', PaperworkAcceptanceController::class)
            ->only(['index', 'show', 'create', 'store', 'destroy']);
    });

Route::get('/posts', function() {
    return view('posts');
});
