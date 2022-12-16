<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\User_information;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sender>
 */
class SenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_info_id' => fake()->numberBetween(1, User_information::count()),
            'transation_id' =>  fake()->numberBetween(1, Transaction::count()),
            'customer_id' =>  fake()->numberBetween(1, Customer::count()),
            'card_id' =>  fake()->numberBetween(1, Card::count()),
        ];
    }
}
