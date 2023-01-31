<?php

namespace App\View\Components\Front;

use App\Models\Admin\Member;
use Illuminate\Support\Collection;
use Illuminate\View\Component;


class TeamCarousel extends Component
{
    public Collection $members;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->members = Member::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.front.team-carousel');
    }
}
