<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        if(!$user){
            $user = User::factory()->create();
        }
        return [
            //
            'price'=>$this->faker->numberBetween(100,1000),
            'user_id'=>$user->id
        ];
    }
}
