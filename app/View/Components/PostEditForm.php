<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostEditForm extends Component
{
    public $title;
    public $body;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.posts.post-edit-form');
    }
}
