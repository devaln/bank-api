<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    use HasFactory;
    protected $table = "nominees";
    public $timestamps = true;
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'contact', 'date_of_birth', 'gender', 'relation'];

    /* One Nominee has one Xustomer Class. */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /* One Nominee has one Address Class */
    public function NomineeAddress()
    {
        return $this->morphOne(Address::class, 'addressable');
    }
}
