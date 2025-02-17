<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

Route::get('/hello', function() {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
 });

Route::get('/selamat', function () {
    return 'Selamat Datang';
 }); 

Route::get('/about', function () {
    return 'NIM : 2341760123 <br>
    Nama : Syaqira Nazaretna';
 });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});
    
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan id '.$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

//CONTROLLER
Route::get('/hello', [WelcomeController::class,'hello']);
//Modifikasi - F
Route::get('/about', [PageController::class,'about']);
Route::get('/index', [PageController::class,'index']);
Route::get('/articles{id}', [PageController::class,'articles{id}']);
//Modifikasi - G
Route::get('/home', [HomeController::class,'home']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/article{id}', [ArticleController::class,'article{id}']);



use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Syaqira Nazaretna']);
});
Route::get('/greeting', [WelcomeController::class, 'greeting']);