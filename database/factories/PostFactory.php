<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title=$this->faker->name;
        return [
            'title' => $title,
            'slug' => $title,
            'category_id'=>$this->faker->randomDigitNot(5),
            'tegs'=>$this->faker->name,
            'featured_image' => $this->faker->unique()->imageUrl($width = 640, $height = 480),
            'body'=>$this->faker->text,
            'posted_by'=>$this->faker->name,
            'like'=>$this->faker->randomDigit,
            'dislike'=>$this->faker->randomDigit,
            'status'=>1,
        ];
    }
}