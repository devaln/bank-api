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
    protected $fillable = ['debit_ammount','credit_ammount', 'description'];

    /* One Transation has on Transaction details Class */
    public function details()
    {
        return $this->hasOne(Transaction_Details::class);
    }

    /* One Transaction has one Card Class */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    /* One Trnsaction has one Customer Class */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /* One Transaction has many salary Class */
    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }

    /* One Transaction has one sender Class */
    public function sender()
    {
        return $this->hasOne(Sender::class);
    }
}
