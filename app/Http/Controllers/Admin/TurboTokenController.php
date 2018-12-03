<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Http\Requests\TurboTokenUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TurboTokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turboToken = OneRowPage::where('page', 'turboToken')->first();
        return view('admin.partials.turboToken', compact('turboToken'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(TurboTokenUpdateRequest $request)
    {
        $service = OneRowPage::where('page', 'turboToken')->first();
        $service->update($request->all());

        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
