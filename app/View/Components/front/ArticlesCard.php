<?php

namespace App\View\Components\front;

use App\Models\Admin\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ArticlesCard extends Component
{
    public Collection $articles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->articles = Article::with('member')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.articles-card');
    }
}
