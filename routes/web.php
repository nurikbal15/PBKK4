<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Study_ProgramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Faculty Routes
Route::get('/faculties', [FacultyController::class, 'index'])->name('faculty.index');
Route::get('/faculties/create', [FacultyController::class, 'create'])->name('faculty.create');
Route::post('/faculties/store', [FacultyController::class, 'store'])->name('faculty.store');
Route::get('/faculties/{faculty}', [FacultyController::class, 'show'])->name('faculty.show');
Route::get('/faculties/{faculty}/edit', [FacultyController::class, 'edit'])->name('faculty.edit');
Route::put('/faculties/{faculty}/update', [FacultyController::class, 'update'])->name('faculty.update');
Route::delete('/faculties/{faculty}/destroy', [FacultyController::class, 'destroy'])->name('faculty.destroy');

// Study Program Routes
Route::get('/study_programs', [Study_ProgramController::class, 'index'])->name('study_programs.index');
Route::get('/study_programs/create', [Study_ProgramController::class, 'create'])->name('study_programs.create');
Route::post('/study_programs/store', [Study_ProgramController::class, 'store'])->name('study_programs.store');
Route::get('/study_programs/{study_program}', [Study_ProgramController::class, 'show'])->name('study_programs.show');
Route::get('/study_programs/{study_program}/edit', [Study_ProgramController::class, 'edit'])->name('study_programs.edit');
Route::put('/study_programs/{study_program}/update', [Study_ProgramController::class, 'update'])->name('study_programs.update');
Route::delete('/study_programs/{study_program}/destroy', [Study_ProgramController::class, 'destroy'])->name('study_programs.destroy');
