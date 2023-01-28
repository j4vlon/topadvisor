<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
        $articles = Article::with('member')->get();
        return view('front.articles', compact('articles'));
    }

    public function getArticle($slug){
        $article = Article::with('member')->where('slug', $slug)->first();
        return view('front.article', compact('article'));
    }
}
