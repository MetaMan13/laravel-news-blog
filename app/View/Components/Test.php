<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Test extends Component
{
    public $test;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($test)
    {
        $this->test = $test;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.test');
    }
}
