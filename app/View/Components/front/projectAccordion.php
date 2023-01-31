<?php

namespace App\View\Components\front;

use App\Models\Admin\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class projectAccordion extends Component
{
    public Collection $projects;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->projects = Project::with('subservice', 'partner')->orderByDesc('id')->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.project-accordion');
    }
}
