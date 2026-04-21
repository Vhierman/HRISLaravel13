<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\Admin\LoginController;


// Route::view('/', 'welcome', [
//     'canRegister' => Features::enabled(Features::registration()),
// ])->name('home');

// Route::view('/', 'template_admin.dashboard_admin')->name('home');

Route::get('admin/login',[LoginController::class,'index'])->name('admin.login');
Route::post('admin/login',[LoginController::class,'authenticate'])->name('admin.auth');

Route::prefix('admin')->group(function () {
    Route::view('/', 'template_admin.dashboard_admin')->name('admin.dashboard');
});


// Route::prefix('{current_team}')
//     ->middleware(['auth', 'verified', EnsureTeamMembership::class])
//     ->group(function () {
//         Route::view('dashboard', 'dashboard')->name('dashboard');
//     });

// Route::middleware(['auth'])->group(function () {
//     Route::livewire('invitations/{invitation}/accept', 'pages::teams.accept-invitation')->name('invitations.accept');
// });

// require __DIR__.'/settings.php';
