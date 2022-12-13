<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "departments";
    public $timestamps = true;
    protected $fillable = ['name','employee_count'];

    /* One Department has one Employee Class */
    public function Employee()
    {
        return $this->morphMany(Department::class, 'departmentable');
    }
}
