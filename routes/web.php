<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\WhychooseusController;


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
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('galleryCategory', GalleryCategoryController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('message', MessageController::class);
Route::resource('news', NewsController::class);
Route::resource('result', ResultController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('event', EventController::class);
Route::resource('blog', BlogController::class);
Route::resource('admission', AdmissionController::class);
Route::resource('files', FileController::class);
Route::resource('whychooseus', WhychooseusController::class);



