<?php

namespace Blog;

use View;

class ArticleController extends BaseController
{
    public function showIndex()
    {
        //return View::make('index');
        die('Index');
    }

    public function showSingle()
    {
        return View::make('single');
    }

}