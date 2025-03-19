<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    //the views are in /resources/views
    return view('index');
});

//route with  optional parameters
Route::get('/hello/{name?}/{city?}', function($name = 'Jorge', $city = 'Urânia'){
    return "<h1>Hello, $name! Você mora em $city </h1>";
});

//routes with restrictions - using regular expressions
Route::get('/welcome/{name?}', function ($name = ''){
    return "<h2>Welcome, $name! </h1>";
})->where('name', '[A-Za-z]+')->name('welcome');

//-------------------------------------------------------------------------

//binding an endpoint to a Controller and its method
Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{index}', [BookController::class, 'show']);

