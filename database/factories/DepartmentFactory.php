<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->word,
            'employee_count' => fake()->numerify('##'),
            'status' => '1',
        ];
    }
}
