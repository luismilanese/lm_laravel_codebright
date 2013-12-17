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

Route::get('index', 'Blog\ArticleController@showIndex');

Route::get('templated', 'HomeController@showTemplated');

Route::get('squirrel/{squirrelColor}', array(
    'before' => 'birthday:05/12|birthdayMessage:love,peace,sex|xmas',
    function($squirrelColor) {
        $data['squirrelColor'] = $squirrelColor;
        return View::make('simple', $data);
    }
));

Route::get('/calendar/show', array(
    'as' => 'calendar', 
    'uses' => 'Blog\CalendarController@showCalendar'
));

Route::get('save/{princess}', function($princess) {
    return "Sorry, {$princess} is in another castle. :(";
})->where('princess', '[A-Za-z]+');

Route::get('/redirect/first', function()
{
    return Redirect::to('/redirect/second');
});

Route::get('/redirect/second', function()
{
    return 'Second route.';
});

Route::get('example/{extra?}', function($extraMsg = "Default message")
{
    $data = array();
    $data['msg'] = $extraMsg;
    $data['something'] = 'Black cat';
    $data['animals'] = array(
        'Cat', 'dog', 'squirrel', 'elephant'
    );

    return View::make('example_template', $data);
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

Route::group(array('prefix' => 'cool'), function()
{
    Route::get('/brogram/first', function() 
    {
        return 'Dude!!';
    });
    
    Route::get('/brogram/second', function() 
    {
        return 'Second dude!';
    });
});

Route::get('the/best/avenger', array('as' => 'ironman', function()
{
    return 'Tony Stark';
}));

Route::get('best/avenger', function()
{
    return Redirect::to('ironman');
});

Route::get('/input', function()
{
    $data = Input::all();
    var_dump($data);
});