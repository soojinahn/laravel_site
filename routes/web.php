<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Pages;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    $posts = $user->posts();
    $pages = $user->pages();
    return view('dashboard', compact('posts'));
    return view('dashboard', compact('pages'));
})->name('dashboard');

Route::get('post', Posts::class)->name('post');
Route::get('page', Pages::class)->name('page');

