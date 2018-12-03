<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Http\Requests\SolutionsUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solution = OneRowPage::where('page', 'solutions')->first();
        return view('admin.partials.solutions', compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(SolutionsUpdateRequest $request)
    {
        $service = OneRowPage::where('page', 'solutions')->first();
        $service->update($request->all());

        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
