<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction_Details;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transactions";
    public $timstamps = true;
    protected $fillable = ['ammount', 'description', 'sender_id', 'reciever_id','card_id'];

    /* One Transaction has one Card Class */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    /* One Trnsaction has one Customer Class */
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }

    /* One Trnsaction has one User information Class */
    public function userinformation()
    {
        return $this->belongsTo(User_information::class);
    }

    /* One Transaction has many salary Class */
    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }

    // /* One Transaction has one sender Class */
    // public function sender()
    // {
    //     return $this->hasOne(Sender::class);
    // }
}
