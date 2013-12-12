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

Route::get('index', 'ArticleController@showIndex');

Route::get('squirrel/{squirrelColor}', array(
    'before' => 'birthday:05/12|birthdayMessage:love,peace,sex|xmas',
    function($squirrelColor) {
        $data['squirrelColor'] = $squirrelColor;
        return View::make('simple', $data);
    }
));

Route::get('/redirect/first', function()
{
    return Redirect::to('/redirect/second');
});

Route::get('/redirect/second', function()
{
    return 'Second route.';
});


Route::get('custom/response', function()
{
    $response = Response::make('Hello world!', 200);
    $response->headers->set('our key', 'our value');
echo '<pre>'; var_dump(Session); exit;
    return $response;
});

Route::get('/books/{genre?}', function($genre = null) {

    if ($genre == null) {
        return "Books index.";
    }

    return "Books in the <strong>{$genre}</strong> category. :D";
});

Route::get('response/json', function()
{
    $data = array('Aw', 'no', 'Iron', 'Man');
    return Response::json($data);
});