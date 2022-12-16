<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\User_information;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->randomElement(['Debit-card', 'Credit-card']),
            'number' => fake()->numerify($string = '############'),
            'expiry_date' => fake()->date('y-m-d'),
            'cvv_code' => fake()->numerify($string = '###'),
            'pin' => fake()->numerify($string = '####'),
            'customer_id' => fake()->numberBetween(1, Customer::count()),
            'user_info_id' => fake()->numberBetween(1, User_information::count()),
            'status' => '1',
        ];
    }
}
