<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account_Type>
 */
class Account_TypeFactory extends Factory
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
            'loan_intrest_rate' => fake()->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 2),
            'saving_intrest_rate' => fake()->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 4),
            'customer_id' => fake()->numberBetween(1, Customer::count()),
            'status' => '1',
        ];
    }
}
