<?php

class ArticleController extends BaseController
{
    public function showIndex()
    {
        return View::make('index');
    }

    public function showSingle()
    {
        return View::make('single');
    }

}