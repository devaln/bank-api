<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Sender;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'process' => fake()->randomElement(['Pending', 'Processing', 'Failed']),
            'sender_id' =>fake()->unique()->numberBetween(1, Sender::count()),
            'customer_id' =>fake()->unique()->numberBetween(1, Customer::count()),
            'transaction_id' =>fake()->unique()->numberBetween(1, Transaction::count()),
        ];
    }
}
