<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostsEditForm extends Component
{
    public $postTitle;
    public $postBody;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($postTitle, $postBody)
    {
        $this->postTitle = $postTitle;
        $this->postBody = $postBody;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.posts-edit-form');
    }
}
