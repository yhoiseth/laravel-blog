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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();

//    dump($tasks);

//    return $tasks;

//    dump(DB::class);

    return view(
        'welcome',
        compact('tasks')
    );
});

Route::get('/tasks/{id}', function ($id) {
    $task = DB::table('tasks')->find($id);

    return view(
        'tasks/show',
        compact('tasks')
    );

});


