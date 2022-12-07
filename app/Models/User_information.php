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
    protected $fillable = ['user_id','first_name','middle_name','last_name','contact','date_of_birth','gender','pan_card_number','adhaar_card_number','handicap_details','maritial_status'];

    public function user()
    {
        return $this->belongsTo(User::class, );
    }

    public function data()
    {
        return $this->morphTo();
    }

    public function nominee()
    {
        return $this->hasOne(Nominee::class, 'user_info_id');
    }
}
