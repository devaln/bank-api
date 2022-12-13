<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $table = "cards";
    public $timestamps = true;
    protected $fillable = ['title', 'number', 'expiry_date', 'cvv_code'];

    /* One Card has one Customer Class */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /* One Card has one User */
    public function userinformation()
    {
        return $this->belongsTo(User_information::class);
    }

    /* One Card has Many Transaction */
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    /* One Card has one Sender */
    public function sender()
    {
        return $this->hasOne(Sender::class);
    }
}
