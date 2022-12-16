<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            UserSeeder::class,
            User_InformationSeeder::class,
            DepartmentSeeder::class,
            NomineeSeeder::class,
            AddressSeeder::class,
            Account_TypeSeeder::class,
            CardSeeder::class,
            TransactionSeeder::class,
            SalarySeeder::class,
            SenderSeeder::class,
            // AddressSeeder::class,
            // CustomerSeeder::class,
            // ManagerSeeder::class,
            // EmployeeSeeder::class,
        ]);
    }
}
