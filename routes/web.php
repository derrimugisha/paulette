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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $books = Myfiles::all();
    return view('dashboard')->with('books',$books);
})->name('dashboard');
