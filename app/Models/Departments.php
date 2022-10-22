<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    //must be the same as table name on database
    protected $fillable = [
        'id',
        'dept_code',
        'dept_name',
        'dept_contactNo',
        'dept_email',
    ];
}
