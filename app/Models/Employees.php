<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
 //must be the same as table name on database
    protected $fillable = [
        'id',
        'emp_fname',
        'emp_lname',
        'dept_id',
        'emp_pic',
        'emp_contactNo',
        'emp_email',
    ];
}
