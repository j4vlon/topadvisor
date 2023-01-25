<?php

namespace App\View\Components\front;

use App\Models\Admin\Project;
use Illuminate\View\Component;

class projectAccordion extends Component
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
        $projects = Project::with('subservice', 'partner')->orderByDesc('id')->limit(4)->get();
        return view('components.front.project-accordion', compact('projects'));
    }
}
