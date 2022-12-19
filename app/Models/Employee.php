<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    public $timestamps = true;
    protected $fillable = ['education','date_of_joining','designation','official_email','status', 'customer_id'];

    // Relation Under this table
    /* One Employee has one User Information Class */
    public function userinformation()
    {
        return $this->morphOne(User_information::class, 'userable');
    }

    /* Many Employee has One Department || Manager Class */
    public function employable()
    {
        return $this->morphTo();
    }

    /* One Employee has one Address Class */
    public function EmployeeAddress()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    /* One Employee has many salary Class */
    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
    /* One Employee has one customer Class */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
