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
            'ammount' => fake()->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 3),
            'employee_id' => fake()->numberBetween(1, Employee::count()),
            'transaction_id' => fake()->numberBetween(1, Transaction::count()),
            'status' => '1',
            'description' => fake()->sentence(),
        ];
    }
}
