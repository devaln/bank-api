<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $table = "salaries";
    public $timestamps = true;
    protected $fillable = ['ammount','process'];

    /* One salary has many Transaction Class */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /* One salary has many Employee Class */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
