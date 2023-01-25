<?php

namespace App\View\Components\front;

use App\Models\Admin\Article;
use Illuminate\View\Component;

class ArticlesCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $articles = Article::with('member')->get();
        return view('components.front.articles-card', compact('articles'));
    }
}
