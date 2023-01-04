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
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'contact',
        'date_of_birth',
        'gender',
        'adhaar_card_number',
        'pan_card_number',
        'image',
        'maritial_status',
        'status',
        'userable_type',
        'userable_id',
    ];

    // public static function boot()
    // {
    //     parent::boot();

    //     self::creating(function ($model) {
    //         Customer::factory()->create(1);
    //     });
    // }

    /* One User Information has one User Class */
    public function user()
    {
        return $this->belongsTo(User::class,);
    }

    /* One User Information has one Manager Class */
    public function transaction()
    {
        return $this->hasMany(Transaction::class,);
    }

    /* One User Information has one Customer || Employee || Manager */
    public function userable()
    {
        return $this->morphTo();
    }

    /* One User Information has one Card Class */
    public function card()
    {
        return $this->hasOne(Card::class);
    }

    /* One User Information has one Sender Class */
    public function sender()
    {
        return $this->hasOne(Sender::class);
    }
}
