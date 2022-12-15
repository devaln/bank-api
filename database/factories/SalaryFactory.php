<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ammount' => fake()->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'process' => fake()->randomElement(['Pending', 'Processing', 'Failed']),
            'employee_id' => fake()->unique()->numberBetween(1, Employee::count()),
            'transaction_id' => fake()->unique()->numberBetween(1, Transaction::count()),
        ];
    }
}
