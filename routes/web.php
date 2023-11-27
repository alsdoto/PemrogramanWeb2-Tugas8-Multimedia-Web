<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;

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

Route::get('/post', [PostController::class, 'index'])->name('post_insert');
// Route::get('/editor', [EditorController::class, 'index'])->name('index');
// Route::post('/editor', [EditorController::class, 'store'])->name('editor.store');
// Route::get('post', 'PostController@index');

Route::get('/image', [ImageController::class, 'index'])->name('image_gallery');
Route::get('/image/insert', [ImageController::class, 'create'])->name('image_insert');
Route::post('/image/save', [ImageController::class, 'store'])->name('image_save');
Route::get('/image/view/{fileImage}', [ImageController::class, 'viewImage'])->name('image_view');

// Route::get('/image', 'ImageController@index')->name('image');
// Route::get('/image/insert', 'ImageController@create')->name('image_insert');
// Route::post('/image/save', 'ImageController@store')->name('image_save');
// Route::get('/image/view/{fileImage}', 'ImageController@viewImage')->name('image_view');

Route::get('/video', [VideoController::class, 'index'])->name('video');
Route::get('/video/insert', [VideoController::class, 'create'])->name('video_insert');
Route::post('/video/save', [VideoController::class, 'store'])->name('video_save');
Route::get('/video/view/{fileVideo}', [VideoController::class, 'viewVideo'])->name('video_view');
