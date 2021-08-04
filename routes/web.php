<?php

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

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Route::get('/', 'MoviesController@index')->name('movies.index');
//
Route::get('/', function () {
    $data= Movie::all();
    return view('welcome', ["movie"=>$data]);
});

//Route::get('/movie', 'ShowMovieController@index')->name('movies.index');
//Route::resource('movie',MovieController);
Route::get('/movie/{id}', [App\Http\Controllers\ShowMovieController::class, 'index'])->name('movie');

Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', function () {
    return redirect('/movies');
});

Route::get('/{vue_capture?}', function () {
    return view('home');
})->where('vue_capture', '[\/\w\.-]*')->middleware('auth');

//Route::get('movielist', 'ShowMovieController@show');
//Route::get('/movielist', [App\Http\Controllers\ShowMovieController::class, 'show'])->name('movielist');
