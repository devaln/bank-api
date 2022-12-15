<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    public function definition()
    {
        return [
            'education' => fake()->word,
            'date_of_joining' => fake()->date('y-m-d'),
            'work_status' => '1',
            'designation' => fake()->word,
            'official_email' => fake()->firstName."@bankapi.com",
        ];
    }
}
