<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\livewire\TestComponent;

Route::view('/', 'welcome');

Route::get('/dashboard', function(){
    $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('dashboard',[
            'users' => $users
        ]);
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/chat/{id}', function($id){
    return view('chat', [
        'id' => $id
    ]);
})->middleware(['auth', 'verified'])->name('chat');


Route::get('/text/{id}', function($id){
    return view('text', [
        'id' => $id
    ]);
})->middleware(['auth', 'verified'])->name('text');

Route::get('/chats/{id}', function($id) {
    return view('chats', ['id' => $id]);
})->middleware(['auth', 'verified'])->name('chats');


Route::get('test', function () {
    return view('test');
})->middleware(['auth', 'verified'])->name('test');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
