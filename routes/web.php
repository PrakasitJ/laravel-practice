<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return redirect()->route('about.index'); // เปลี่ยนชื่อ route ตามที่นิสิตกำหนด
});

Route::get('/hello/{name}', function ($name) {
    return "Hello {$name}";
})->name("hello.name");

Route::get('/about', [AboutController::class, 'index'])
    ->name('about.index');

Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
//Route::get('/songs/show/{id}', [SongController::class, 'show'])->name('songs.show');
//Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');

//Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
//Route::delete('/songs', [SongController::class, 'remove'])->name('songs.remove');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
