<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            UserSeeder::class,
            Account_TypeSeeder::class,
            DepartmentSeeder::class,
            ManagerSeeder::class,
            // CustomerSeeder::class,
            // EmployeeSeeder::class,
            User_InformationSeeder::class,
            CardSeeder::class,
            NomineeSeeder::class,
            AddressSeeder::class,
            TransactionSeeder::class,
            SalarySeeder::class,
        ]);
    }
}
