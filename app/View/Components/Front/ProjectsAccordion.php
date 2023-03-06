<?php

namespace App\View\Components\Front;

use App\Models\Admin\Industry;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class ProjectsAccordion extends Component
{
    public Collection $services;
    public Collection $subservices;
    public Collection $projects;
    public Collection $industries;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = Service::all();
        $this->subservices = Subservice::all();
        $this->industries = Industry::all();
        $this->projects = Project::with('subservice', 'partner')->orderByDesc('id')->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.projects-accordion');
    }
}
