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
Route::get('myorders/',[App\Http\Controllers\OrdersController::class,'index']);
Route::post('saveemail/',[App\Http\Controllers\ContactController::class,'storeEmail']);
Route::post('savephone/',[App\Http\Controllers\ContactController::class,'storephone']);
Route::get('tosettings/',[App\Http\Controllers\settingsController::class,'index']);
Route::post('tosettings/changes',[App\Http\Controllers\settingsController::class,'ChangeSideHeadText']);
Route::post('tosettings/aboutus',[App\Http\Controllers\settingsController::class,'ChangeAboutUs']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $books = Myfiles::all();
    return view('dashboard')->with('books',$books);
})->name('dashboard');
