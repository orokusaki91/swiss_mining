<?php

namespace App\Http\Controllers;

use App\Database\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.partials.newsletters', compact('newsletters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->email !== null) {
            $counts = Newsletter::pluck('email');

            if ($counts->count() == 0) {

                Newsletter::create([
                    'email' => $request->email
                ]);
        
                return redirect('/#contact')->with(['email' => 'You subscribed to newsletters']);
            } else {
                return redirect('/#contact')->with(['email' => 'Your e-mail adress is already in newsletter system']);
            }

        }

        return redirect('/#contact')->with(['email' => 'Please enter e-mail adress']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();

        return redirect()->route('admin.newsletter')->with(['success' => 'You successfuly deleted newsletter']);
    }
}
