<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable = [
        'emply_id',
        'name',
        'email',
        'role',
        'date',
        'joining_date',
        'leaving_date',
        'phone_number',
    ];

}
