<?php

namespace Database\Seeders;

use App\Models\Nominee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NomineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nominee::factory()->count(50)->create();
    }
}
