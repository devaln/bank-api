<?php

namespace Database\Seeders;

use App\Models\Transaction_Details;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Transaction_DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction_Details::factory()->count(5)->create();
    }
}
