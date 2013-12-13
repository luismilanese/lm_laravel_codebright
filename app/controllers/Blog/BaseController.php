<?php

namespace Blog;

use Controller;

class BaseController extends Controller {

    public function __construct()
    {
        echo 'This is the <strong>MORE</strong> specific BaseController';
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

}