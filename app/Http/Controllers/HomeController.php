<?php

namespace App\Http\Controllers;

use App\Database\OneRowPage;
use App\Database\MissionVision;
use App\Database\Team;
use App\Database\Partners;
use App\Database\Newsletter;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $aboutUs        = OneRowPage::where('page', 'aboutUs')->first();

        $missionVisions = MissionVision::all();

        $team           = Team::all();

        // $service        = OneRowPage::where('page', 'service')->first();
        
        $solution       = OneRowPage::where('page', 'solutions')->first();
        
        $turboToken     = OneRowPage::where('page', 'turboToken')->first();

        $partners       = Partners::all();

        $language       = app()->getLocale();

        return view('welcome')
                ->with('language', $language)
                ->with('aboutUs', $aboutUs)
                ->with('missionVisions', $missionVisions)
                ->with('team', $team)
                // ->with('service', $service)
                ->with('solution', $solution)
                ->with('turboToken', $turboToken)
                ->with('partners', $partners);
    }

    public function changeLang($lang)
    {
        session()->put('locale', $lang);

        return redirect()->back();
    }

    public function subscribe(Request $request)
    {
        if ($request->email !== null) {
            $counts = Newsletter::pluck('email');

            if ($counts->count() == 0) {

                Newsletter::create([
                    'email' => $request->email
                ]);
        
                return redirect('/#contact')->with(['email' => __('translate.subscribed-to-newsletters')]);
            } else {
                return redirect('/#contact')->with(['email' => __('translate.email-in-system')]);
            }

        }

        return redirect('/#contact')->with(['email' => __('translate.enter-email')]);
    }
}
