<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostsItem extends Component
{
    public $name;
    public $tags;
    public $body;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $tags, $body)
    {
        $this->name = $name;
        $this->tags = $tags;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.posts.posts-item');
    }
}
