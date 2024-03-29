<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
 return view('home', [
  'title' => 'Home',
  'active' => 'home',
 ]);
});

Route::get('/about', function () {
 return view('about', [
  'title' => 'About',
  'active' => 'about',
  'name' => 'Muhammad Ferdynan Ali Syahbana',
  'email' => 'ferdynan.jr@gmail.com',
  'image' => 'alydap.jpg',
 ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (Category $category) {
 return view('categories', [
  'title' => 'Post Categories',
  'active' => 'categories',
  'categories' => Category::all(),
 ]);
});

Route::get('downloads', [DownloadController::class, 'index']);
Route::get('download/{id}', [DownloadController::class, 'downloadPDF'])->name('download.pdf');
