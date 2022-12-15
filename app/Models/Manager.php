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

    /* One Manager has One User_information Class */
    public function userinformation()
    {
        return $this->belongsTo(User_information::class);
    }
}
