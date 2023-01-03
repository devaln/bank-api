<?php

namespace Database\Factories;

use App\Models\Account_type;
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
            'account_number' => fake()->numerify($string = '10##########'),
            'account_limit' => '20000.00',//For ATM one time debit ammount.
            'current_balance' => '50000',
            'status' => '1',
            'account_type_id' => fake()->numberBetween(1, Account_type::count()),
        ];
    }
}
