<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/code', ['as' => 'code', function(){
    return view('pages.home');
}]);

Route::get('/design', ['as' => 'design', function(){
    return view('pages.home');
}]);

Route::get('/{page}', ['as' => 'home', function(){
    return view('pages.home');
}])
->where('page', '^$|index\.(html|php|jsp|aspx?)$');


