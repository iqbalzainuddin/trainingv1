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

Route::get('/loginv2', function () {
    return view('loginv2');
})->name('loginv2');

Route::get('/registerv2', function () {
    return view('registerv2');
})->name('registerv2');

Auth::routes();

// Students Routes
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/students', 'StudentController@index')->name('students.index');
// Route::get('/students/create', 'StudentController@create')->name('students.create');
// Route::post('/students', 'StudentController@store')->name('students.store');
// Route::get('/students/{student}', 'StudentController@show')->name('students.show');
// Route::get('/students/{student}/edit', 'StudentController@edit')->name('students.edit');
// Route::put('/students/{student}', 'StudentController@update')->name('students.update');
// Route::delete('/students/{student}', 'StudentController@destroy')->name('students.destroy');
Route::resource('students', 'StudentController')->only(['index', 'edit', 'update']);
Route::resource('subjects', 'SubjectController');
Route::resource('groups', 'GroupController');
Route::resource('halls', 'HallController');
Route::resource('timetables', 'TimetableController')->except(['show']);