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

    // public static function boot()
    // {
    //     parent::boot();

    //     self::creating(function ($model) {
    //         Card::factory()->create(1);
    //     });
    // }

    /* One Customer has one User Information Class */
    public function userinformation()
    {
        return $this->morphOne(User_information::class, 'userable');
    }

    /* One Customere have one Address class */
    public function CustomerAddress()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    /* One Customer has one Nominee Class */
    public function Nominee()
    {
        return $this->hasOne(Nominee::class);
    }

    /* One Customer has one Card Class */
    public function card()
    {
        return $this->hasOne(Card::class);
    }

    /* One Customer has Many Transaction Class */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /* One Customer has one Account type Class */
    public function type()
    {
        return $this->hasOne(Account_type::class);
    }
    /* One Customer has one Employee Class */
    // public function employee()
    // {
    //     return $this->hasOne(Employee::class);
    // }
}