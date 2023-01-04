<?php

namespace App\Imports;

use App\Models\User_information;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportUserInformation implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User_information([
            'first_name' => $row[0],
            'middle_name' => $row[1],
            'last_name' => $row[2],
            'contact' => $row[3],
            'date_of_birth' => $row[4],
            'gender' => $row[5],
            'maritial_status' => $row[6],
            'adhaar_card_number' => $row[7],
            'pan_card_number' => $row[8],
            'status' => $row[9],
            'user_id' => $row[10],
            'userable_type' => $row[11],
            'userable_id' => $row[12],
        ]);
    }
}
