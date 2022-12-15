<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class User_informationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->unique()->numberBetween(1, User::count()),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'contact' => '1234567890',
            'date_of_birth' => fake()->date('y-m-d'),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'maritial_status' => fake()->randomElement(['Married', 'Unmarried', 'Divorced']),
            'adhaar_card_number' => '123456789',
            'pan_card_number' => '123456789',
            'userable_id' => fake()->unique()->randomDigit,
            'userable_type' => Str::random(4),
        ];
    }
}
