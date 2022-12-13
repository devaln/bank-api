<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account_type extends Model
{
    use HasFactory;
    protected $table = "account_types";
    public $timestamps = true;
    protected $fillable = ['type','loan_intrest_rate','saving_intrest_rate'];

    /* One Account type has one Customer Class */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
