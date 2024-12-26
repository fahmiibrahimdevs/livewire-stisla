<?php

use App\Livewire\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('/', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {});

Route::group(['middleware' => ['auth', 'role:user']], function () {});
require __DIR__ . '/auth.php';
