<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_category = [1,2,3,4];
        return [
            'name' =>$this->faker->name,
            'color' => $this->faker->hexcolor(),
            'photo' =>$this->faker->imageUrl($width = 640, $height = 480),
            'price' =>$this->faker->numberBetween($min = 1000, $max = 9000),
            'short_description'=> $this->faker->sentence($nbWords = 6, $variableNbWords = true) ,
            'long_description'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2) ,
            'available' =>true,
            'quantity'=>10 ,
        ];
    }
}
