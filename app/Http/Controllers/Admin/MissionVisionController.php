<?php

namespace App\Http\Controllers\Admin;

use App\Database\MissionVision;
use App\Http\Requests\RequestMissionVissionUpdateRequest;
use App\Http\Controllers\Controller;

class MissionVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = MissionVision::all();
        return view('admin.partials.missionVision.list')
                ->with('all', $all);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionVision $vision)
    {
        return view('admin.partials.missionVision.edit', compact('vision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestMissionVissionUpdateRequest $request, MissionVision $vision)
    {
        $vision->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
