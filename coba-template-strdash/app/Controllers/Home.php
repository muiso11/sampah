<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('srtdash/login');
        // return view('welcome_message');
    }
    public function a()
    {
        return view('srtdash/index');
    }
}
