<?php

namespace App\View\Components\Front;

use App\Models\Admin\Service;
use App\Models\Admin\Subservice;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class HeaderComponent extends Component
{
    public Collection $services;
    public Collection $subservices;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = Service::with('subservices')->get();
        $this->subservices = Subservice::with('projects')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.header-component');
    }
}
