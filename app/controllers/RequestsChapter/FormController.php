<?php

namespace RequestChapter;

use View;

class FormController extends \BaseController
{
    public function getFormSubmit()
    {
        die(";)");
        $data = Input::all(); // Pega todos
        
        if (Input::has('foo'))
        {
            echo "I have foo. Its value is " . Input::get('foo');
        }

        var_dump($data);
    }
}