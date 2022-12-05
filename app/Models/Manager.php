<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = "managers";
    public $timestamps = true;
    protected $fillable = ['designation'];

    public function userinformation()
    {
        return $this->morphOne(User_information::class, 'data');
    }
}
