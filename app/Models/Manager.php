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

    /* Many Manager has One Employee Class */
    public function employee()
    {
        return $this->morphMany(Employee::class, 'employable');
    }

    public function ManagerAddress()
    {
        return $this->morphOne(Manager::class, 'addressable');
    }

    public function manger()
    {
        return $this->morphOne(User_information::class, 'userable');
    }
}
