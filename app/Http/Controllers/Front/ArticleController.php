<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Article;
use App\Models\Admin\Industry;
use App\Models\Admin\Member;
use App\Models\Admin\Subservice;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(Request $request){
        $subservices = Subservice::all();
        $industries = Industry::all();
        $members = Member::all();
        $articles = Article::orderBy('id','desc')->limit(16)->get();
        $query = Article::query();
        if ($request->ajax()){
            if ($request->subservice_id){
                $articles = $query->where('subservice_id', $request->subservice_id)->with('member')->get();
                return response()->json([
                    'articles' => $articles
                ]);
            }
            if ($request->industry_id){
                $articles = $query->where('industry_id', $request->industry_id)->with('member')->get();
                return response()->json([
                    'articles' => $articles
                ]);
            }
            if ($request->member_id){
                $articles = $query->where('member_id', $request->member_id)->with('member')->get();
                return response()->json([
                    'articles' => $articles
                ]);
            }
            if ($request->date){
                $articles = $query->with('member')->orderByDesc('created_at')->limit(16)->get();
                return response()->json([
                    'articles' => $articles
                ]);
            }
            if ($request->load_more){
                $articles = $query->with('member')->orderByDesc('id')->get();
                return response()->json([
                    'articles' => $articles
                ]);
            }
        }
        return view('front.articles', compact('industries', 'subservices', 'members', 'articles'));
    }

    public function getArticle($slug){
        $article = Article::with('member')->where('slug', $slug)->first();
        return view('front.article', compact('article'));
    }
}
