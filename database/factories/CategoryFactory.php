<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $facker_name=$this->faker->unique()->name;
        return [
            'cat_name' => $facker_name,
            'cat_slug' => $facker_name,
            'cat_cover_image' => $this->faker->unique()->imageUrl($width = 640, $height = 480),
            'status' => 1,
        ];
        
        

        
    }
}