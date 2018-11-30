<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use Illuminate\Support\Facades\File;
use App\Database\Partners;
use App\Http\Controllers\Controller;


class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::all();
        return view('admin.partials.partners.list')
                ->with('partners', $partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partials.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePartnerRequest $request)
    {
        $image = $request->file('image');
        $name = time() . $request->name . '.' . $image->getClientOriginalExtension();
        $folder = '/img/partners/';
        $saveFolder = public_path($folder);
        $image->move($saveFolder, $name);
        $dbPath = $folder . $name;

        Partners::create([
            'name' => $request->name,
            'image' => $dbPath,
            'website' => $request->website,
        ]);

        return redirect()->route('admin.partners')->with(['success' => 'You successfuly created partner']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partners $partner)
    {
        return view('admin.partials.partners.edit')
            ->with('partner', $partner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnerRequest $request, Partners $partner)
    {
        $partner->update($request->all());
        return redirect()->back()->with(['success' => 'You successfuly made changes of content']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partner)
    {
        File::delete(public_path($partner->image));
        $partner->delete();

        return redirect()->route('admin.partners')->with(['success' => 'You successfuly deleted partner']);
    }
}