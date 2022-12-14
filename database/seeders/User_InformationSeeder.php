<?php

namespace Database\Seeders;

use Carbon\CarbonPeriod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use IntlChar;

class User_InformationSeeder extends Seeder
{

    public function run()
    {
        DB::table('user_informations')->insert([
            'user_id' => Str::random(1),
            'first_name' => Str::random(5),
            'middle_name' => Str::random(5),
            'last_name' => Str::random(5),
            'contact' => Str::random(10),
            'date_of_birth' => CarbonPeriod::create('1978-03-01', '2020-03-31'),
            'gender' => Str::random('Male', 'Female', 'Other'),
            'adhaar_card_number' => Str()::random(12),
            'pan_card_number' => Str::random(10),
            'image' => str::random(12),
            'maritial_status' => Str::random('Married', 'Unmarried', 'Divorced'),

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
