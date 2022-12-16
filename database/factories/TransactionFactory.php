<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User_information;
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
            'ammount' => fake()->numerify('####.##'),
            'description' => fake()->sentence,
            'sender_id' => fake()->numberBetween(1, User_information::count()),
            'reciever_id' => fake()->numberBetween(1, User_information::count()),
        ];
    }
}
