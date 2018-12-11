<?php

namespace App\Http\Controllers\Admin;

use App\Database\Team;
use App\Http\Requests\TeamCreateRequest;
use App\Http\Requests\TeamUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.partials.team.list')
                ->with('team', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partials.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamCreateRequest $request)
    {
        $image = $request->file('image');
        $dbPath = uploadPublicImage($image, $request->name, '/img/team/profile-pictures/');

        Team::create([
            'name' => $request->name,
            'about' => $request->about,
            'image' => $dbPath,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('admin.team')->with(['success' => 'You successfuly created new meamber of team']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $teamMember)
    {
        return view('admin.partials.team.edit')
            ->with('teamMember', $teamMember);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamUpdateRequest $request, Team $teamMember)
    {
        $teamMember->update($request->all());
        return redirect()->back()->with(['success' => "You successfuly made changes information about this Member"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $teamMember)
    {
        File::delete(public_path($teamMember->image));
        $teamMember->delete();

        return redirect()->route('admin.team')->with(['success' => 'You successfuly deleted team member']);
    }
    
}
