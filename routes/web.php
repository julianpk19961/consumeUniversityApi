<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\teacherController;
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
    Route::get('/Estudiantes/{student}', 'show')->name('studentShow');
    Route::get('/Estudiantes/Editar/{student}', 'edit')->name('studentEdit');
    //Se deja la ruta recibiendo la variable desde el llamado para no crear un campo invisible con el id del registro.
    Route::post('/Estudiantes/Actualizar/{student}', 'update')->name('studentUpdate');
    Route::get('/Estudiantes/delete/{student}', 'destroy')->name('studentDelete');
});


Route::controller(teacherController::class)->group(function () {
    Route::get('/Profesores', 'index')->name('teacherIndex');
    Route::get('/Profesores/Nuevo', 'create')->name('teacherCreate');
    Route::post('/Profesores', 'store')->name('teacherStored');
    Route::get('/Profesores/{teacher}', 'show')->name('teacherShow');
    Route::get('/Profesores/Editar/{teacher}', 'edit')->name('teacherEdit');
    Route::post('/Profesores/Actualizar/{teacher}', 'update')->name('teacherUpdate');
    Route::get('/Profesores/delete/{teacher}', 'destroy')->name('teacherDelete');
});

Route::controller(subjectController::class)->group(function () {
    Route::get('/Asignaturas', 'index')->name('subjectIndex');
    Route::get('/Asignaturas/Nuevo', 'create')->name('subjectCreate');
    Route::post('/Asignaturas', 'store')->name('subjectStored');
    Route::get('/Asignaturas/{subject}', 'show')->name('subjectShow');
    Route::get('/Asignaturas/Editar/{subject}', 'edit')->name('subjectEdit');
    Route::post('/Asignaturas/Actualizar/{subject}', 'update')->name('subjectUpdate');
    Route::get('/Asignaturas/delete/{subject}', 'destroy')->name('subjectDelete');
});
