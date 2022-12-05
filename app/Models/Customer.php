<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    public $timestamps = true;
    protected $fillable = ['account_number','account_limit','current_balance'];

    public function userinformation()
    {
        return $this->morphOne(User_information::class, 'data');
    }
}
