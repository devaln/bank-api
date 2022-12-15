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
            AddressSeeder::class,
            CustomerSeeder::class,
            ManagerSeeder::class,
            Account_TypeSeeder::class,
            CardSeeder::class,
            NomineeSeeder::class,
            AddressSeeder::class,
            EmployeeSeeder::class,
            DepartmentSeeder::class,
            SalarySeeder::class,
            TransactionSeeder::class,
            Transaction_DetailsSeeder::class,
            SenderSeeder::class,
        ]);
    }
}
