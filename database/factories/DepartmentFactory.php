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
    protected $model = Department::class;

    public function definition()
    {
        $commentable = $this->commentable();

        return [
            'name' => fake()->word,
            'employee_count' => fake()->numerify('##'),
            'status' => '1',
            'departmentable_id' => $commentable::factory(),
            'departmentable_type' => $commentable,
        ];
    }

    public function commentable()
    {
        return $this->faker->randomElement([
            Employee::class,
            Department::class,
        ]);

    }
}
