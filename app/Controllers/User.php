<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }

    public function aboutUs(): string
    {
        return view('about_us_page');
    }
}
