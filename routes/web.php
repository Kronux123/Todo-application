<?php

use App\Livewire\Authentication\Register;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Todo;
use App\Livewire\Authentication\Login;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Welcome;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Welcome::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');


Route::middleware('auth', 'auth.session')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/todo', Todo::class)->name('todo');
});