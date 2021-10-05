<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SiteconfigController;
use App\Http\Controllers\CoursecatController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\WhychooseusController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;


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
    return view('index');
});
// Route::get('/files', function () {
//     return view('files.index');
// });

// Route::get('/dashboard', function () {
//     if (routes()->has('user')) {
//         # cod...
//         return redirect('dashbard');

//     }
//     else {
//         # code...
//         return redirect('login');
//     }
    
// });

Route::get('/index','App\Http\Controllers\IndexController@index');
Route::get('/','App\Http\Controllers\IndexController@index');
Route::get('/aboutus','App\Http\Controllers\IndexController@about_us');
Route::get('/messages','App\Http\Controllers\IndexController@messages');
Route::get('/planning','App\Http\Controllers\IndexController@planning');
Route::get('/admissions','App\Http\Controllers\IndexController@admission');


Route::get('/results','App\Http\Controllers\IndexController@results');
Route::get('/notices','App\Http\Controllers\IndexController@notice');
Route::get('/courses/{id}','App\Http\Controllers\IndexController@course');
Route::get('/teachers','App\Http\Controllers\IndexController@teacher');
Route::get('/newses','App\Http\Controllers\IndexController@news');
Route::get('/galleries','App\Http\Controllers\IndexController@gallery');
Route::get('/events','App\Http\Controllers\IndexController@event');
Route::get('/blogs','App\Http\Controllers\IndexController@blog');
Route::get('/notice_details/{id}','App\Http\Controllers\IndexController@notice_details');
Route::get('/news_details/{id}','App\Http\Controllers\IndexController@news_details');

Route::get('/event_details/{id}','App\Http\Controllers\IndexController@event_details');
Route::get('/course_details/{id}','App\Http\Controllers\IndexController@course_details');
Route::get('/teacher_details/{id}','App\Http\Controllers\IndexController@teacher_details');
Route::get('/contacts','App\Http\Controllers\IndexController@contacts');



Route::resource('galleryCategory', GalleryCategoryController::class)->middleware('authenticated');
Route::resource('gallery', GalleryController::class)->middleware('authenticated');
Route::resource('message', MessageController::class)->middleware('authenticated');
Route::resource('news', NewsController::class)->middleware('authenticated');
Route::resource('result', ResultController::class)->middleware('authenticated');
Route::resource('teacher', TeacherController::class)->middleware('authenticated');
Route::resource('course', CourseController::class)->middleware('authenticated');
Route::resource('slider', SliderController::class)->middleware('authenticated');
Route::resource('notice', NoticeController::class)->middleware('authenticated');
Route::resource('siteconfig', SiteconfigController::class)->middleware('authenticated');
Route::resource('coursecat', CoursecatController::class)->middleware('authenticated');
Route::resource('files', FileController::class)->middleware('authenticated');
Route::resource('blog', BlogController::class)->middleware('authenticated');
Route::resource('admission', AdmissionController::class)->middleware('authenticated');
Route::resource('whychooseus', WhychooseusController::class)->middleware('authenticated');
Route::resource('event', EventController::class)->middleware('authenticated');


Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

