<?php

namespace App\View\Components\front;

use App\Models\Admin\Member;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\View\Component;

class HeaderComponent extends Component
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
        $services = Service::with('subservices')->get();
        $subservices = Subservice::with('projects')->get();
        return view('components.front.header-component', compact('services', 'subservices'));
    }
}
