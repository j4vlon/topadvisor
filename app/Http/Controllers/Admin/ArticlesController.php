<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreArticleRequest;
use App\Http\Requests\Admin\UpdateArticleRequest;
use App\Models\Admin\Article;
use App\Models\Admin\Industry;
use App\Models\Admin\Member;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $articles = Article::with('member')->get();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $members = Member::all();
        $services = Service::all();
        $subservices = Subservice::all();
        $industries = Industry::all();
        return view('admin.articles.create', compact('members','services', 'subservices', 'industries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreArticleRequest $request)
    {
        $article = new Article($request->validated());
        if ($request->hasFile('file_url')) {
            $path = $request->file_url->store('uploads', 'public');
            $article->file_url = '/storage/' . $path;
        }
        $article->save();
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
    public function edit(Article $article)
    {
        $members = Member::all();
        $services = Service::all();
        $subservices = Subservice::all();
        $industries = Industry::all();
        return view('admin.articles.update', compact('article', 'members', 'services', 'subservices', 'industries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {

        $article->fill($request->validated());
        dd($article->read_time);
        $article->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back();
    }

    /**
     * @param UpdateArticleRequest|Request $request
     * @param Article $article
     * @return void
     */
    public function extracted(UpdateArticleRequest|Request $request, Article $article): void
    {
        $article->meta_title = $request->meta_title;
        $article->meta_descr = $request->meta_descr;
        $article->member_id = $request->member_id;
        $article->service_id = $request->service_id;
        $article->subservice_id = $request->subservice_id;
        $article->title = $request->title;
        $article->descr = $request->descr;

    }
}
