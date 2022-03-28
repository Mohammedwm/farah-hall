<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->limit(1)->first()->id,
            'owner_name' => $this->faker->name(),
            'hall_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'created_date' => $this->faker->date('Y-m-d'),
            'size' =>  $this->faker->numberBetween(300,800),
            'min_count' => $this->faker->numberBetween(300,400),
            'max_count' => $this->faker->numberBetween(450,600),
            'detail' => $this->faker->sentences(3, true),
        ];
    }
}
