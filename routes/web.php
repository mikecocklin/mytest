<?php

/**
 * Home Page
 */
Route::get('/', 'ListController@show');

Route::get('/home', function () {
    return view('welcome');
});

/**
 * Test Page
 */
Route::get('/testpage', function () {
    return view('test');
});

Route::resource('cars', 'CarController');


Route::get('/logout', function() {
    Auth::logout();

    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/got', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);