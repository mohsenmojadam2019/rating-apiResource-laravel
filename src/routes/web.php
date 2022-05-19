<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('books', 'BookController');
Route::post('books/{book}/ratings', 'RatingController@store');
