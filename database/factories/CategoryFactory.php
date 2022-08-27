<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_name = ['New', 'Screen Protectors', 'Accessories', 'Cases'];

        return [
            'category_name' => $this->faker->unique()->randomElement($category_name),
        ];
    }
}
