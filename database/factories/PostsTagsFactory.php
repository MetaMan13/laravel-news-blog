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
            'post_id' => $this->faker->numberBetween(1, 1000),
            'tag_id' => $this->faker->numberBetween(1, 11)
        ];
    }
}
