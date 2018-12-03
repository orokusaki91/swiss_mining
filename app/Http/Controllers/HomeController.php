<?php

namespace App\Http\Controllers;

use App\Database\OneRowPage;
use App\Database\MissionVision;
use App\Database\Team;
use App\Database\Partners;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $aboutUs        = OneRowPage::where('page', 'aboutUs')->first();

        $missionVisions = MissionVision::all();

        $team           = Team::all();

        $service        = OneRowPage::where('page', 'service')->first();
        
        $solution       = OneRowPage::where('page', 'solutions')->first();
        
        $turboToken     = OneRowPage::where('page', 'turboToken')->first();

        $partners       = Partners::all();

        $language       = app()->getLocale();

        return view('welcome')
                ->with('language', $language)
                ->with('aboutUs', $aboutUs)
                ->with('missionVisions', $missionVisions)
                ->with('team', $team)
                ->with('service', $service)
                ->with('solution', $solution)
                ->with('turboToken', $turboToken)
                ->with('partners', $partners);
    }
}
