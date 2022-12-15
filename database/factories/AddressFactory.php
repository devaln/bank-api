<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city_name' => fake()->city,
            'landmark' => fake()->streetAddress,
            'taluka' => fake()->stateAbbr,
            'district' => fake()->stateAbbr,
            'state' => fake()->state,
            'country' => fake()->country,
            'pin_code' => fake()->numerify($string = '######'),
            'addressable_id' => fake()->unique()->randomDigit,
            'addressable_type' => Str::random(4),
        ];
    }
}
