<?php

namespace App\View\Components\front;

use App\Models\Admin\Member;
use Illuminate\View\Component;

class TeamCarousel extends Component
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
        $members = Member::all();
        return view('components.front.team-carousel', compact('members'));
    }
}
