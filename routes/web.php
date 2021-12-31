<?php

use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Period;

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

Route::get('/', function () {return view('index');});
Route::get('/user', function () {return view('pages/user');});
Route::get('/sentiment', function () {return view('pages/sentiment');});
Route::get('/business', function () {return view('pages/business');});
Route::get('/preactive', function () {return view('pages/preactive');});
Route::get('/behaviour', function () {return view('pages/behaviour');});
Route::get('/data', function () {return view('pages/data');});
Route::get('/visual', function () {return view('pages/visual');});
Route::get('/index-10', function () {return view('pages/index-10');});
Route::get('/index-11', function () {return view('pages/index-11');});
Route::get('/index-12', function () {return view('pages/index-12');});
Route::get('/index-13', function () {return view('pages/index-13');});
Route::get('/index-14', function () {return view('pages/index-14');});
Route::get('/index-15', function () {return view('pages/index-15');});
Route::get('/index-16', function () {return view('pages/index-16');});
Route::get('/index-17', function () {return view('pages/index-17');});
Route::get('/index-18', function () {return view('pages/index-18');});
Route::get('/index-19', function () {return view('pages/index-19');});
Route::get('/index-20', function () {return view('pages/index-20');});
Route::get('/index-21', function () {return view('pages/index-21');});
Route::get('/index-22', function () {return view('pages/index-22');});
Route::get('/aboutus', function () {return view('pages/aboutus');});
Route::get('/artificial-intelligence', function () {return view('services/artificial-intelligence');});
Route::get('/services', function () {return view('services/services');});
Route::get('/data-analytics', function () {return view('services/data-analytics');});
Route::get('/managed-analytics', function () {return view('services/managed-analytics');});
Route::get('/big-data-services', function () {return view('services/big-data-services');});
Route::get('/data-science-consulting', function () {return view('services/data-science-consulting');});
Route::get('/business-intelligence', function () {return view('services/business-intelligence');});
Route::get('/data-visualization-services', function () {return view('services/data-visualization-services');});
Route::get('/data-management', function () {return view('services/data-management');});
Route::get('/portfolio', function () {return view('pages/portfolio');});
Route::get('/contact', function () {return view('pages/contact');});
Route::get('/blog', function () {return view('pages/blog');});

// Route::get('/aboutus', function () {return view('services/aboutus');});
// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/read', function () {
//     return view('read');
// });
Route::get('/admin', function () {
    return view('auth/login');
});

Route::get('/analytics', function () {

    $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
    return view('analytics', ['analyticsData' => $analyticsData]);
});

//Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::get('read/{id}',[App\Http\Controllers\BlogController::class, 'read'])->name('project.read');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addblog', [App\Http\Controllers\HomeController::class, 'addblog'])->name('addblog');
Route::post('/insert', [App\Http\Controllers\HomeController::class, 'insert'])->name('insert');
Route::get('emp/listing', [App\Http\Controllers\HomeController::class, 'getEmployees'])->name('emp.listing');
Route::get('edit/{id}',[App\Http\Controllers\HomeController::class, 'edit'])->name('project.edit');
Route::post('/update',[App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('delete/{id}',[App\Http\Controllers\HomeController::class, 'delete'])->name('project.delete');


