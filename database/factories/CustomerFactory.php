<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'account_number' => fake()->numerify($string = '############'),
            'account_limit' => '20000.00',
            'current_balance' => '1000.00',
            'status' => '1',
        ];
    }
}
