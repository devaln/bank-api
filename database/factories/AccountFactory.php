<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => fake()->randomElement(['Salary', 'Zero-Balance', 'Salaried-Zero-Balance']),
            'loan_intrest_rate' => fake()->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'saving_intrest_rate' => fake()->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        ];
    }
}
