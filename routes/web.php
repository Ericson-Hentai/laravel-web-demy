<?php

use App\Series;
use Illuminate\Support\Facades\Auth;
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
    $series = Series::take(3)->latest()->get();
    return view('front', compact('series'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/series', 'SeriesController@index')->name('series.index');
Route::get('/series/{series}', 'SeriesController@show')->name('series.show');
Route::get('/series/{series}/episode/{episodenumber}', 'SeriesController@episode')->name('series.show.episode');
