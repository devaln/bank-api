<?php

namespace App\Exports;

use App\Models\User_information;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUserInformation implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User_information::select(
            'first_name',
            'middle_name',
            'last_name',
            'contact',
            'gender',
            'maritial_status',
            'adhaar_card_number',
            'pan_card_number',
        )->get();
    }
}
