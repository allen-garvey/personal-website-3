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

Route::pattern('index', '^$|index\.(html?|php|jsp|.cfm|aspx?)$');

Route::get('/{index}', ['as' => 'home', function(){
    return view('pages.home')->with('data', ['body_class' => 'home']);
}]);

Route::resource('code', 'CodeController',
                ['only' => ['index', 'show']]);

Route::resource('design', 'ArtworkController',
                ['only' => ['index', 'show']]);


