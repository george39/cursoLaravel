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

/*
use App\Video;

Route::get('/', function () {
	$videos = Video::all();
	foreach ($videos as $video){
		echo $video->title;
		echo $video->user->email.'<br/>';
		foreach ($video->comments as $comment) {
			echo $comment->body;
		}
		echo "<hr/>";
	}
	die();
    return view('welcome');
});
*/

Route::get('/', function(){
	return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Rutas del controlador de videos
Route::get('/crear-video', array(
	'as' => 'createVideo',
	'middleware' => 'auth',
	'uses' => 'VideoController@createVideo'
	));
