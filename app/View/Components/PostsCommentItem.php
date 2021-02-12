<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostsCommentItem extends Component
{
    public $userName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.posts.posts-comment-item');
    }
}
