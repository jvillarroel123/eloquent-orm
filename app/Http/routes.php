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
use App\User;

Route::get('/create', function () {
    
    $user = User::create([
    	'name' => 'Javier Villarroel',
    	'email' => 'javier@gmail.com',
    	'password' => bcrypt('123123'),
    	'gender' => 'm',
    	'bio' => "ingeniero"
    	]);

    return "Usuario guardado";
});

Route::get('/update-user', function () {
    
    $user = User::find(1);

    $user->gender = 'f';
    $user->bio = "ingeniero";

    $user->save();

    return "Usuario actualizado";
});
