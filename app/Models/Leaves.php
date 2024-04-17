<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
    use HasFactory;
    protected $fillable = [
        'lve_id',
        "name",
        'leave_type',
        'leave_from',
        'leave_to',
        'reason',
    ];
}
