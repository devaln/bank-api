<?php

namespace Database\Seeders;

use App\Models\User_information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User_InformationSeeder extends Seeder
{

    public function run()
    {
        User_information::factory()->count(5)->create();
    }
}
