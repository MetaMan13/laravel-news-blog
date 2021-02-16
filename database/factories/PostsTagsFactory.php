<?php

namespace Database\Factories;

use App\Models\PostsTags;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsTagsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostsTags::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => \App\Models\Post::inRandomOrder()->first()->id,
            'tag_id' => \App\Models\Tags::inRandomOrder()->first()->id,
        ];
    }
}
