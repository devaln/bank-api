<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nominee>
 */
class NomineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->firstNameMale,
            'last_name' => fake()->lastName,
            'date_of_birth' => fake()->date('y-m-d'),
            'contact' => fake()->numerify('##########'),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'relation' => fake()->randomElement(['Father', 'Mother']),
            'status' => '1',
            'customer_id' => fake()->numberBetween(1, Customer::count()),
        ];
    }
}
