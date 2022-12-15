<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'debit_ammount' => fake()->numerify('####.##'),
            'credit_ammount' => fake()->numerify('####.##'),
            'description' => fake()->sentence,
            'customer_id' => fake()->unique()->numberBetween(1, Customer::count()),
        ];
    }
}
