<?php

use App\Http\Controllers\studentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(studentController::class)->group(function () {
    Route::get('/Estudiantes', 'index')->name('studentIndex');
    Route::get('/Estudiantes/Nuevo', 'create')->name('studentCreate');
    Route::post('/Estudiantes', 'store')->name('studentStored');
});
