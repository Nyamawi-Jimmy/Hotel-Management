<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location', 'city', 'phone','longlat'];

    public  function blocks(){
    return $this->hasMany(Blocks::class);
    }
}
