<?php

namespace App\Http\Controllers;

use App\Database\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::get()->first();

        return view('welcome')
                ->with('aboutUs', $aboutUs);
    }
}
