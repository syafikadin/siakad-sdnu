<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\MataPelajaran;
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
    return view('home', [
        "title" => 'Home'
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('user');

// Route::resource('/dashboard/jadwal');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('admin');

Route::resource('/admin/students', StudentController::class);

Route::resource('/admin/teachers', TeacherController::class);

Route::resource('/admin/mapel', MataPelajaranController::class);
