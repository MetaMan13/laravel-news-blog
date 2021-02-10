<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostsItemTag extends Component
{
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = preg_replace('/\s/', '-', $name);
        $this->name = strtolower($this->name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.posts.posts-item-tag');
    }
}
