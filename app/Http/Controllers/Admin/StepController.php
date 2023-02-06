<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Step;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $steps = Step::with('subservice')->get();
        return view('admin.steps.index', compact('steps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $subservices = Subservice::all();
        return view('admin.steps.create', compact('subservices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'subservice_id' => 'required',
            'addmore.*.index' => 'required',
            'addmore.*.descr' => 'required',
        ]);

        foreach ($request->addmore as $key => $value) {
            $steps = new Step();
            $steps->index = $value['index'];
            $steps->descr = $value['descr'];
            $steps->subservice_id = $request->subservice_id;
            $steps->save();
        }
        return back()->with('success', 'Record Created Successfully.');
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
    public function edit(Step $step)
    {
        $subservices = Subservice::all();
        return view('admin.steps.update', compact('subservices', 'step'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Step $step)
    {
        $step->index = $request->index;
        $step->descr = $request->descr;
        $step->subservice_id = $request->subservice_id;
        $step->update();

        return back()->with('success', 'Record Created Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Step $step)
    {
        $step->delete();
        return redirect()->back();
    }
}
