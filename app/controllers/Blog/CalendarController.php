<?php
namespace Blog;

use View;
use \BaseController as Controllerzao;

class CalendarController extends Controllerzao
{
    public function showCalendar()
    {
        echo 'From Controller';
        return View::make('calendar');
    }
}