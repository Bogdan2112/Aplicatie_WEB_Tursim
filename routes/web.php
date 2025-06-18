<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/events', function () {
    $cards = \App\Models\Card::latest()->get();
    return view('events', compact('cards'));
});

Route::resource('cards', \App\Http\Controllers\CardController::class);

Route::get('/test-cards', function () {
    $cards = \App\Models\Card::latest()->get();
    return view('cards.test', compact('cards'));
});

Route::get('/cards/create', [App\Http\Controllers\CardController::class, 'create'])->name('cards.create');
Route::post('/cards', [App\Http\Controllers\CardController::class, 'store'])->name('cards.store');

// Authentication routes
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::get('/admin/edit', function () {
    if (session('admin_logged_in')) {
        $cards = \App\Models\Card::latest()->get();
        return view('cards.index', compact('cards'));
    }
    return redirect()->route('login');
})->name('admin.edit');