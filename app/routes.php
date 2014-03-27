<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// return View::make('hello');
    // $reflection = new ReflectionClass('Administrator');  //  inspect the methods and constants of any class!
 
    // print_r($reflection->getMethods());
   echo 'hello'; 
});

Route::get('/i', function()
{
    return View::make('import');
});

Route::post('/import', 'Admin_ImportController@add');
Route::get('/admin', 'Admin_UserController@showProfile'); // admin index page
Route::post('/sign_up', 'Admin_UserController@signUp'); // reg
Route::get('/sign_in', function()
{
    $input = Input::get('email', '');
    $admin = Administrator::whereUsername($input)->first();
    if ($admin['exists'] == TRUE) {
        echo 'ok';
        return;
    }
    

});
// login
