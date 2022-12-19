<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Manager;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    protected $model = Employee::class;

    public function definition()
    {
        $employable = $this->employable();

        return [
            'education' => fake()->word,
            'date_of_joining' => fake()->date('y-m-d'),
            'designation' => fake()->word,
            'official_email' => fake()->firstName."@bankapi.com",
            'status' => '1',
            'employable_id' => $employable::Factory(),
            'employable_type' => $employable,
            'customer_id' => fake()->numberBetween(1, Customer::count()),
        ];
    }

    public function employable()
    {
        return $this->faker->randomElement([
            Department::class,
            Manager::class,
        ]);
    }
}
