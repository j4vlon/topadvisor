<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBenefitRequest;
use App\Http\Requests\Admin\UpdateBenefitRequest;
use App\Models\Admin\Benefit;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $subservices = Subservice::all();
        return view('admin.benefit.create', compact('subservices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBenefitRequest $request)
    {

        foreach ($request->addmore as $key => $value){


            $benefits = new Benefit();
            $benefits->subservice_id = $request->subservice_id;
            $benefits->title = $value['title'];
            $benefits->descr = $value['descr'];
            $benefits->default_txt = $value['default_txt'];
            $path = $value['file_url']->store('uploads', 'public');
            $benefits->file_url = '/storage/'.$path;
//            dd($benefits->file_url);
            $benefits->save();
        }
        return redirect()->back();
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
    public function edit(Benefit $benefit)
    {
        $subservices = Subservice::all();
        return view('admin.benefit.update', compact('benefit', 'subservices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBenefitRequest $request, Benefit $benefit)
    {
        $benefit->subservice_id = $request->subservice_id;
        $benefit->title = $request->title;
        if ($request->hasFile('file_url')){
            $path = $request->file_url->store('uploads', 'public');
            $benefit->file_url = '/storage/'.$path;
        }
        $benefit->descr = $request->descr;
        $benefit->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        return redirect()->back();
    }
}
