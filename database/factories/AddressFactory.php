<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Manager;
use App\Models\Nominee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{

    protected $model = Address::class;

    public function definition()
    {
        $addressable = $this->addressable();

        return [
            'city_name' => fake()->city,
            'landmark' => fake()->streetAddress,
            'taluka' => fake()->stateAbbr,
            'district' => fake()->stateAbbr,
            'state' => fake()->state,
            'country' => fake()->country,
            'pin_code' => fake()->numerify($string = '######'),
            'addressable_id' => $addressable::factory(),
            'addressable_type' => $addressable,
        ];
    }

    public function addressable()
    {
        return $this->faker->randomElement([
            Customer::class,
            Employee::class,
            Nominee::class,
            Manager::class,
        ]);
    }
}
