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

//use Symfony\Component\Routing\Route;

//use Symfony\Component\Routing\Annotation\Route;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the butcher',
        'Go to Hannah',
    ];


    return view(
        'welcome',
        compact('tasks')
    );
});

Route::get('/about', function () {
    return view('about');
});


