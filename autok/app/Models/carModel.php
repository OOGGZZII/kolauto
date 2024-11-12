<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    function maker(){
        return $this->belongsTo(Maker::class);
    }
    function trims()
    {
        return $this->hasMany(Trim::class);
    }
}
