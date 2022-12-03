<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = "addresses";
    public $timestamps = true;
    protected $fillable = ['city_name','landmark','taluka','district','state','country','pin_code'];
}
