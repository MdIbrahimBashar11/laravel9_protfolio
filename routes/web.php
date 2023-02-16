<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


//Home Section All Route
Route::get('/about', [HomeController:: class, 'about']);
Route::get('/protfolio', [HomeController:: class, 'protfolio']);
Route::get('/contact', [HomeController:: class, 'contact']);
Route::get('/blog', [HomeController:: class, 'blog']);
Route::get('/post_details/{id}', [HomeController:: class, 'post_details']);
Route::get('/message', [HomeController:: class, 'message']);


//Admin Section All Route
Route::get('/admin', [HomeController:: class, 'admin']);
Route::get('/add', [HomeController:: class, 'add']);
Route::post('/addPost', [HomeController:: class, 'addPost']);
Route::get('/myPost', [HomeController:: class, 'myPost']);
Route::get('/update_post/{id}', [HomeController:: class, 'update_post']);
Route::get('/delete_post/{id}', [HomeController:: class, 'delete_post']);
Route::get('/message', [HomeController:: class, 'message']);
Route::post('/update_post_confirm/{id}', [HomeController:: class, 'update_post_confirm']);
Route::get('/delete_mesg/{id}', [HomeController:: class, 'delete_mesg']);