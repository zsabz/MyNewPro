<?php

use Illuminate\Support\Facades\Route;
use \Admin\Http\Controllers\Admin\Test;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/t', [Test::class, 'f']);

