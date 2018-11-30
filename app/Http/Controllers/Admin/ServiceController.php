<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Http\Requests\ServicesUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = OneRowPage::where('page', 'service')->first();
        return view('admin.partials.service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesUpdateRequest $request)
    {
        $service = OneRowPage::where('page', 'service')->first();
        $service->update($request->all());

        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }
}
