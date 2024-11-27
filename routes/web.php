<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Appointment\Create;
use Illuminate\Support\Facades\Route;
use App\Livewire\Appointment\Index;

Route::get('/', function () {
    return view('home');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/appointments/create', Create::class)->name('appointments.create');
    Route::get('/appointments', Index::class)->name('appointments.index');


});

require __DIR__.'/auth.php';
