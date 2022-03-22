<?php

use App\Http\Controllers\FileController;
use App\Models\File;
use Illuminate\Support\Facades\Route;

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
    $files = File::all();
    return view('welcome', compact('files'));
});

Route::get('/admin', function () {
    $files = File::all();
    return view('layouts.appAdmin', compact('files'));
});

Route::get('/image', function () {
    $files = File::where('archived', false)->get();
    $archived = File::where('archived', true)->get();
    return view('pages.afficheForeachImage', compact('files', 'archived'));
});



Route::get('/pdf', function () {
    $files = File::all();
    return view('pages.afficheForeachPdf', compact('files'));
});


Route::get('/archived/{id}', [FileController::class, 'archived']);
Route::resource('file', FileController::class);


