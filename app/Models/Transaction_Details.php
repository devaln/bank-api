<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_Details extends Model
{
    use HasFactory;
    protected $table = 'transaction__details';
    public $timestamps = true;
    protected $fillable = ['process'];

    /* One Transaction detail has one Transaction Class */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /* One Transaction detail must contain one Customer class */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /* One Transaction details has on sender Class */
    public function sender()
    {
        return $this->belongsTo(Sender::class);
    }
}