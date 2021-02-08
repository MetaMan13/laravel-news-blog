<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostEditForm extends Component
{
    public $title;
    public $body;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $body, $id)
    {
        $this->title = $title;
        $this->body = $body;
        $this->id = $id;
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
