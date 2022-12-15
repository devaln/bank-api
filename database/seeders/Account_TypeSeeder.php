<?php

namespace Database\Seeders;

use App\Models\Account_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Account_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account_type::factory()->count(5)->create();
    }
}
