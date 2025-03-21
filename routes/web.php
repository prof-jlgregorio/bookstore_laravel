<?php

//use App\Http\Controllers\BookController;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

//index or root
Route::get('/',[ IndexController::class, 'index' ])->name('index');

//routes to resource controllers
Route::resource("/authors", AuthorController::class);



















//route with  optional parameters
//Route::get('/hello/{name?}/{city?}', function($name = 'Jorge', $city = 'Urânia'){
 //   return "<h1>Hello, $name! Você mora em $city </h1>";
//});

//routes with restrictions - using regular expressions
//Route::get('/welcome/{name?}', function ($name = ''){
    //return "<h2>Welcome, $name! </h1>";
//})->where('name', '[A-Za-z]+')->name('welcome');

//-------------------------------------------------------------------------

//binding an endpoint to a Controller and its method
//Route::get('/books', [BookController::class, 'index']);

//Route::get('/books/{index}', [BookController::class, 'show']);

