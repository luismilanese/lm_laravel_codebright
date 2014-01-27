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
    return Album::tripePeriod()->get();
});

Route::get('/seed', function()
{
    $album = new Album();
    $album->title  = 'Some Mad Hope';
    $album->artist = 'Matt Nathanson';
    $album->genre  = 'Acoustic';
    $album->year   = 2007;
    $album->save();

    $album = new Album();
    $album->title  = 'Title';
    $album->artist = 'Matt Nathanson';
    $album->genre  = 'Acoustic';
    $album->year   = 1993;
    $album->save();

    $album = new Album();
    $album->title  = 'Leaving Through The Window';
    $album->artist = 'Something Corporate';
    $album->genre  = 'Piano';
    $album->year   = 2002;
    $album->save();

    $album = new Album();
    $album->title  = 'North';
    $album->artist = 'Something Corporate';
    $album->genre  = 'Piano';
    $album->year   = 2002;
    $album->save();

    $album = new Album();
    $album->title  = '... Anywhere But Here';
    $album->artist = 'The Ataris';
    $album->genre  = 'Punk';
    $album->year   = 1997;
    $album->save();

    $album = new Album();
    $album->title  = '... Is A Real Boy';
    $album->artist = 'Say Anything';
    $album->genre  = 'Indie';
    $album->year   = 2006;
    $album->save();


});