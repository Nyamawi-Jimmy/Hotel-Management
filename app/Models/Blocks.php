<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blocks extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "block_id"
    ];

    public function properties(){
        return $this->belongsTo(Properties::class);
    }
}
