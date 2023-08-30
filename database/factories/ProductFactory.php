<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'price'=> $this->faker->numberBetween(100,1000),
            'availability' => $this->faker->randomElement(['available', 'unavailable']),
            'category_id'=>Category::inRandomOrder()->first()->id
        ];
    }
}
