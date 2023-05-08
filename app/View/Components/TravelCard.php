<?php

namespace App\View\Components;

use App\Models\Travel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TravelCard extends Component
{
    private Travel $travel;
    /**
     * Create a new component instance.
     */
    public function __construct(Travel $travel)
    {
        $this->travel = $travel;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.travel-card', ['travel' => $this->travel]);
    }
}
