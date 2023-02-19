<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/redirect', [HomeController::class, 'redirect']);
//Home Section All Route
Route::get('/about', [HomeController:: class, 'about']);
Route::get('/protfolio', [HomeController:: class, 'protfolio']);
Route::get('/contact', [HomeController:: class, 'contact']);
Route::get('/blog', [HomeController:: class, 'blog']);
Route::get('/post_details/{id}', [HomeController:: class, 'post_details']);
Route::post('/messagesend', [HomeController:: class, 'messagesend']);


//Admin Section All Route
Route::get('/admin', [Admin:: class, 'admin']);
Route::get('/add', [Admin:: class, 'add']);
Route::post('/addPost', [Admin:: class, 'addPost']);
Route::get('/myPost', [Admin:: class, 'myPost']);
Route::get('/update_post/{id}', [Admin:: class, 'update_post']);
Route::get('/delete_post/{id}', [Admin:: class, 'delete_post']);
Route::get('/message', [Admin:: class, 'message']);
Route::post('/update_post_confirm/{id}', [Admin:: class, 'update_post_confirm']);
Route::get('/delete_mesg/{id}', [Admin:: class, 'delete_mesg']);