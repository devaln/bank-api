<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    use HasFactory;
    protected $table = "senders";
    public $timestamps = true;
    protected $fillable = ['ammount','process'];

    /* One Sender has one Card Class */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    /* One Sender has one User Information Class */
    public function userinformation()
    {
        return $this->belongsTo(User_information::class);
    }

    /* One Sender has one Transaction Class */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
