<?php

namespace App\Controllers;

use Core\Util;

class PagesController
{
    public function home()
    {
        $title = "Home";
        return Util::view('index', compact('title', 'users'));
    }

    public function about()
    {
        $title = "About Us";
        return Util::view('about', compact('title'));
    }
    public function contact()
    {
        $title = "Contact Us";
        return Util::view('contact', compact('title'));
    }
}
