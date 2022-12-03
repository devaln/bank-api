<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class User_information extends Model
{
    use HasFactory;
    protected $table = "user_informations";
    public $timestamps = true;
    protected $fillable = ['first_name','middle_name','last_name','contact','date_of_birth','gender','pan_card_number','adhar_card_number','handicap_details','maritial_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
