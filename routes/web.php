<?php

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Specialty
Route::get('specialties', 'SpecialtyController@index')->name('specialties.index');
Route::get('specialties/create', 'SpecialtyController@create')->name('specialties.create'); //form de registro
Route::get('specialties/{specialty}/edit', 'SpecialtyController@edit')->name('specialties.edit');

Route::post('specialties', 'SpecialtyController@store')->name('specialties.store'); // envio form de registro
Route::put('specialties/{specialty}','SpecialtyController@update')->name('specialties.update');
Route::delete('spcialties/{specialty}', 'SpecialtyController@destroy')->name('specialties.destroy');

// Doctors
Route::resource('doctors', 'DoctorController');

// Patients
