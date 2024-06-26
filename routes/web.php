<?php

use App\Http\Controllers\KanbanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', \App\Livewire\ShowBoards::class)->name('dashboard');

    Route::get('/boards', \App\Livewire\ShowBoards::class)->name(
        'boards.index'
    );

    Route::get('/boards/{board}', \App\Livewire\ShowBoard::class)->name(
        'boards.show'
    );
});
