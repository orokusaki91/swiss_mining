<?php

namespace App\Http\Controllers;

use App\Database\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $language = "fr";
    public function index()
    {
        $aboutUs = AboutUs::get()->first();
        
        // DB column
        $header = 'header_' . $this->language;
        $body = 'body_' . $this->language;

        return view('welcome', compact('aboutUs', 'header', 'body'));
    }
}
