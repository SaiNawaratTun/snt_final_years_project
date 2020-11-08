<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('form', 'FormController');
Route::get('/form', function () {
    return view('forms.view');
})->middleware('auth');

Route::resource('feedback', 'FeedbackController');
Route::get('/feedback', function () {
    return view('feedbacks.view');
})->middleware('auth');

Route::resource('food','FoodController');
Route::get('/food', function () {
    return view('foods.view');
})->middleware('auth');

Route::resource('item', 'ItemController');
Route::get('/item', function () {
    return view('items.view');
})->middleware('auth');

Route::resource('volunteer', 'VolunteerController');
Route::get('/volunteer', function () {
    return view('volunteers.view');
})->middleware('auth');

Route::get('/a', function () {
    return view('forms.viewA');
});
Route::get('/b', function () {
    return view('forms.viewB');
});
Route::get('/o', function () {
    return view('forms.viewO');
});
Route::get('/ab', function () {
    return view('forms.viewAB');
});

Route::get('/about', function () {
    return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
