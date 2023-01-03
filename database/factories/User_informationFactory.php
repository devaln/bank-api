<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Manager;
use App\Models\User;
use App\Models\User_information;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class User_informationFactory extends Factory
{

    protected $model = User_information::class;

    public function definition()
    {
        $userable = $this->userable();

        return [
            'user_id' => fake()->unique()->numberBetween(1, User::count()),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->firstNameMale,
            'last_name' => fake()->lastName(),
            'contact' => '1234567890',
            'date_of_birth' => fake()->date('y-m-d'),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'maritial_status' => fake()->randomElement(['Married', 'Unmarried', 'Divorced']),
            'adhaar_card_number' => fake()->numerify('############'),
            'pan_card_number' => 'CELPN'.fake()->numerify("####").'R',
            'status' => '1',
            'userable_id' => $userable::factory(),
            'userable_type' => $userable,
        ];
    }

    public function userable()
    {
        return $this->faker->randomElement([
            Customer::class,
            Employee::class,
            // Manager::class,
        ]);
    }
}
