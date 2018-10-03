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

Route::get('/', function () {
    echo "<h2>This is home page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is about page</h2>";
});

Route::get('/contact', function () {
   echo "<h2>This is contact page</h2>";
});

Route::get('/test', function (){
   return view('test', ['name' => 'Le Duy Huan']);
});

Route::get('student/{name}', function ($name) {
   echo 'Student name is' . $name;
});

Route::get('user/{name}', function ($name = "Le Duy Huan") {
   echo 'User name is' . $name;
});