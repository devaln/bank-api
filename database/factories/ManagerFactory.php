<?php

namespace Database\Factories;

use App\Models\User_information;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manager>
 */
class ManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'designation' => fake()->word,
            'status' => '1',
            // 'user_info' => fake()->unique()->numberBetween(1, User_information::count()),
        ];
    }
}
