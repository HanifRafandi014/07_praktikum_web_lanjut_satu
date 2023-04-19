<?php

namespace App\View\Components;

use Illuminate\View\Component;

class laravelcomp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dashboard;
    public $index;

    public function __construct($dashboard, $index)
    {
        $this->dashboard = $dashboard;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.laravelcomp');
    }
}
