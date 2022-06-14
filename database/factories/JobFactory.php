<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'description' => $this->faker->paragraph(),
            'salary' => $this->faker->numberBetween(50000, 250000)
        ];
    }
}
