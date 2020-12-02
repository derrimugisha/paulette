<?php

use Illuminate\Support\Facades\Route;

use App\Models\Myfiles;

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

Route::get('/',[App\Http\Controllers\PagesController::class,'index']);

Route::get('file-upload',[App\Http\Controllers\FileUploadController::class,'index']);
Route::post('store/',[App\Http\Controllers\FileUploadController::class,'store']);
Route::get('edit/{id}',[App\Http\Controllers\PagesController::class,'edit']);
Route::post('update/{id}',[App\Http\Controllers\PagesController::class,'update']);
Route::post('destroy/{id}',[App\Http\Controllers\PagesController::class,'destroy']);
Route::post('order/',[App\Http\Controllers\OrdersController::class,'store']);
Route::get('notf/',[App\Http\Controllers\OrdersController::class,'getNewOrder']);
Route::get('allorders/',[App\Http\Controllers\OrdersController::class,'allorders']);
Route::get('myorders/',[App\Http\Controllers\OrdersController::class,'index']);
Route::get('seeorders/{id}',[App\Http\Controllers\OrdersController::class,'seeorders']);
Route::post('saveemail/',[App\Http\Controllers\ContactController::class,'storeEmail']);
Route::post('savephone/',[App\Http\Controllers\ContactController::class,'storephone']);
Route::get('tosettings/',[App\Http\Controllers\SettingsController::class,'index']);
Route::post('tosettings/changes',[App\Http\Controllers\SettingsController::class,'ChangeSideHeadText']);
Route::post('tosettings/aboutus',[App\Http\Controllers\SettingsController::class,'ChangeAboutUs']);
Route::post('update/footer/{id}',[App\Http\Controllers\SettingsController::class,'updatefc']);
Route::post('add/footer',[App\Http\Controllers\SettingsController::class,'addFootterContent']);
Route::get('removecontact/{id}',[App\Http\Controllers\SettingsController::class,'deleteFc']);
Route::get('subscribers',[App\Http\Controllers\ContactController::class,'index']);
Route::post('addrate',[App\Http\Controllers\RatingController::class,'store']);
Route::get('test-email',[App\Http\Controllers\CheckOutMailer::class,'sendEmail']);
Route::post('subscribersection',[App\Http\Controllers\SettingsController::class,'updatesubscribersection']);
Route::get('myviews',[App\Http\Controllers\ViewsController::class,'index']);
Route::get('fortest',[App\Http\Controllers\TesterController::class,'Test2']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $books = Myfiles::all();
    return view('dashboard')->with('books',$books);
})->name('dashboard');


 //Clear config cache:
 Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:clear');
    return 'Config cache cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:clear');
    return 'Routes cache cleared';
});

 // Clear view cache:
Route::get('/view-cache', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
