<?php

namespace App\Http\Controllers\Admin;

use App\Database\OneRowPage;
use App\Http\Requests\AboutUsUpdateRequest;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = OneRowPage::where('page', 'aboutUs')->first();
        return view('admin.partials.aboutUs', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUsUpdateRequest $request)
    {
        $content = OneRowPage::where('page', 'aboutUs')->first();
        $content->update($request->all());

        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

}
