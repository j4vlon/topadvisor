<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInformationRequest;
use App\Models\Admin\InfoDirection;
use App\Models\Admin\Information;
use Illuminate\Console\View\Components\Info;
use Illuminate\Http\Request;

class UsefulInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $informations = Information::all();
        return view('admin.informations.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $infodirections = InfoDirection::all();
        return view('admin.informations.create', compact('infodirections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreInformationRequest $request)
    {

        $information = new Information($request->validated());
        foreach ($request->file_url as $file) {
            Information::storeFile($file);
        }
        $information->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Information $information)
    {
        return view('admin.informations.update', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        $information->fill($request->validated());
        if ($request->hasfile('file_url')){
            $path = $request->file_url->store('uploads', 'public');
            $information->file_url = '/storage/'.$path;
        }
        $information->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Information $information)
    {
        $information->delete();
        return redirect()->back();
    }
}
