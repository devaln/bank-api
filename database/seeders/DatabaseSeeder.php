<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User_information::factory(10)->create();

        // \App\Models\User_information::factory()->create([
        //     'name' => 'Test User_information',
        //     'email' => 'test@example.com',
        //     'first_name' => 'admin',
        //     'middle_name' => 'adminn',
        //     'last_name' => 'adminnn',
        //     'contact' => '1234567890',
        //     'date_of_birth' => '21/01/1999',
        //     'gender' => 'Male',
        //     'maritial_status' => 'Married',
        //     'adhaar_card_number' => '12345678',
        //     'pan_card_number' => '12345678',
        //     // 'login' => '',

        // ]);


            // Create 10 records of customers
            factory(App\Customer::class, 10)->create()->each(function ($customer) {
                // Seed the relation with one address
                $address = factory(App\CustomerAddress::class)->make();
                $customer->address()->save($address);

                // Seed the relation with 5 purchases
                $purchases = factory(App\CustomerPurchase::class, 5)->make();
                $customer->purchases()->saveMany($purchases);
            });

    }
}
