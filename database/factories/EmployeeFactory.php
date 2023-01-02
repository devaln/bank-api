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
            'salary' => fake()->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 2),
            'department_id' => fake()->numberBetween(1, Department::count()),
            'manager_id' => fake()->numberBetween(1, Manager::count()),
            'customer_id' => fake()->numberBetween(1, Customer::count()),
            'status' => '1',

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
