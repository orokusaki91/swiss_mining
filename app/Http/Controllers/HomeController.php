<?php

namespace App\Http\Controllers;

use App\Database\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $aboutUs = AboutUs::get()->first();

        $language = app()->getLocale();

        return view('welcome')
                ->with('aboutUs', $aboutUs)
                ->with('language', $language);
    }
}
