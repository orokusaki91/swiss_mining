<?php

namespace App\Http\Controllers;

use App\Database\AboutUs;
use App\Database\MissionVision;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $aboutUs = AboutUs::get()->first();

        $missionVisions = MissionVision::all();

        $language = app()->getLocale();

        return view('welcome')
                ->with('aboutUs', $aboutUs)
                ->with('missionVisions', $missionVisions)
                ->with('language', $language);
    }
}
