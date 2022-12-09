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
}
